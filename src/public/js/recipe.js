import { makeRequest } from './ajax/methods.js'
import { url } from './utils/url.js';
import { scrollToTargetCustom } from './utils/scrollToTargetCustom.js';

const createCommentForm = document.querySelector('form[name=createCommentForm]');
const ratingInput = createCommentForm.querySelector('input[name=rating]');
const stars = document.querySelectorAll('.rating-input-star');
const ratingInputCancel = document.querySelector('#ratingInputCancel');

ratingInputCancel.style.display = 'none';

// TODO IF COMMENT WITH RATING IS DELETED, PUT DISPLAY = 'BLOCK' NO .rating-input

const starmark = (event) => {
    const count = event.target.id[0];
    if (event.type == 'click') {
        ratingInput.value = count;
        ratingInputCancel.style.display = 'inline';
    }

    const subid = event.target.id.substring(1);
    for (let i = 0; i < 5; i++) {
        const star = document.getElementById((i + 1) + subid);
        if (event.type == 'mouseout') {
            star.classList.remove("hover");
            continue;
        }
        if (i < count) {
            if (event.type == 'click') star.classList.add("active");
            else star.classList.add("hover");
        }
        else {
            if (event.type == 'click') star.classList.remove("active");
            else star.classList.remove("hover");
        }
    }
}

const removeRating = () => {
    ratingInput.value = 0;
    const subid = ratingInputCancel.nextElementSibling.id.substring(1);
    for (let i = 0; i < 5; i++) {
        const star = document.getElementById((i + 1) + subid);
        star.classList.remove("active");
    }
    ratingInputCancel.style.display = 'none';
}

for (const star of stars) {
    star.addEventListener('click', starmark);
    star.addEventListener('mouseover', starmark);
    star.addEventListener('mouseout', starmark);
}
ratingInputCancel.addEventListener('click', removeRating);

const setErrorMessage = (message) => {
    const errorElements = document.querySelectorAll('.createCommentFormErrors');
    if (errorElements.length == 0) {
        createCommentForm.insertAdjacentHTML('beforebegin', `<div class="alert alert-danger createCommentFormErrors">
            ${message}
        </div>`);
    } else {
        for (const elem of errorElements) elem.innerText = message;
    }
}

const setReplyErrorMessage = (form, message) => {
    const errorElements = document.querySelectorAll('.createReplyFormErrors');
    if (errorElements.length == 0) {
        form.insertAdjacentHTML('beforebegin', `<div class="alert alert-danger createReplyFormErrors">
            ${message}
        </div>`);
    } else {
        for (const elem of errorElements) elem.innerText = message;
    }
}

const removeReplyErrorMessage = () => {
    const errorElements = document.querySelectorAll('.createReplyFormErrors');
    for (const elem of errorElements) elem.remove();
}

const removeCommentErrorMessage = () => {
    const errorElements = document.querySelectorAll('.createCommentFormErrors');
    for (const elem of errorElements) elem.remove();
}

const handleCommentFormSubmit = (event) => {
    event.preventDefault();
    const rating = createCommentForm.querySelector('input[name=rating]').value;
    const textarea = createCommentForm.querySelector('textarea[name=content]');
    const body = {
        'recipeId': createCommentForm.querySelector('input[name=recipeId]').value,
        'content': textarea.value
    };

    let hasRating = false;
    if (rating != '0' && rating != null) {
        body.rating = rating;
        hasRating = true;
    }
    console.log("Sending comment", body);
    makeRequest(url('/api/comment'), 'POST', body)
        .then((result) => {
            if (result.response.status == 200) {
                createCommentForm.previousElementSibling.insertAdjacentHTML('beforebegin', result.content.comment);
                textarea.value = '';
                if (hasRating) document.querySelector('.rating-input').style.display = 'none';
                removeCommentErrorMessage();
                removeRating();
                refreshCommentReplyButtons();
            } else {
                setErrorMessage(result.content.message);
            }
        });
}

const handleReplyFormSubmit = (event, form, comment) => {
    event.preventDefault();

    const parentCommentId = form.querySelector('input[name=parentCommentId]').value;
    const textarea = form.querySelector('textarea[name=content]');
    const depth = form.querySelector('input[name=depth]').value;
    const body = {
        recipeId: form.querySelector('input[name=recipeId]').value,
        content: textarea.value,
        parentCommentId,
        depth
    };

    console.log("Sending comment", body);
    makeRequest(url('/api/comment'), 'POST', body)
        .then((result) => {
            if (result.response.status == 200) {
                comment.insertAdjacentHTML('beforeend', result.content.comment);
                removeCreateReplyForm();
                removeReplyErrorMessage();
                refreshCommentReplyButtons();
            } else {
                setReplyErrorMessage(form, result.content.message);
            }
        });
}

createCommentForm.addEventListener('submit', handleCommentFormSubmit);


const removeCreateReplyForm = () => {
    const forms = document.querySelectorAll('.createReplyFormWrapper');
    for (const form of forms) form.remove();
}

const getCreateReplyFormHTML = (parentComment) => {
    const recipeId = createCommentForm.querySelector('input[name=recipeId]').value;
    const parentCommentId = parentComment.dataset.commentId;
    const parentCommentDepth = parentComment.dataset.depth;
    return `
        <div class="createReplyFormWrapper">
            <h5 class="mt-2">Reply to comment</h5>
            <form name="createReplyForm" class="form-floating m-3 position-relative">
                <input type="hidden" name="recipeId" value="${recipeId}" />
                <input type="hidden" name="parentCommentId" value="${parentCommentId}" />
                <input type="hidden" name="depth" value="${parentCommentDepth+1}" />
                <textarea name="content" id="replyContent" class="form-control" placeholder="Leave a comment here" style="height: 6rem"></textarea>
                <label for="replyContent">Your comment</label>
                <button type="submit" class="btn btn-primary position-absolute py-1 send">
                    <small>
                        <i class="fas fa-paper-plane me-2"></i>
                        Comment
                    </small>
                </button>
            </form>
        </div>
    `;
}

const showRecipeReplyForm = (event) => {
    removeCreateReplyForm();
    let comment;
    if (event.target.tagName == 'I') comment = event.target.parentElement;  // makes element equal to the button
    else comment = event.target;

    comment = comment.parentElement.parentElement.parentElement;


    comment.insertAdjacentHTML('beforeend', getCreateReplyFormHTML(comment));
    const form = comment.lastElementChild.lastElementChild;
    scrollToTargetCustom(form, window.innerHeight/3);
    const submitButton = form.querySelector('button[type=submit]');
    submitButton.addEventListener('click', (event) => handleReplyFormSubmit(event, form, comment));
    form.querySelector('textarea').focus();
}

let recipeCommentReplyButtons = [];

const refreshCommentReplyButtons = () => {
    const newButtons = document.querySelectorAll('.recipe-comment-reply-button');
    for (const button of newButtons) {
        if (!recipeCommentReplyButtons.includes(button)) {
            button.addEventListener('click', showRecipeReplyForm);
        }
    }
    recipeCommentReplyButtons = [...newButtons];
}

refreshCommentReplyButtons();
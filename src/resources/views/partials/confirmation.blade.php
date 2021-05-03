{{--

    Confirmation modal
    Receives: $modalId, $modalTitle, $modalMessage, $modalYesFunction, $modalYesText, $modalNoText

--}}

<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modalId }}Label">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $modalMessage }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ $modalNoText }}</button>
                <button type="button" class="btn btn-primary" onClick="{{ $modalYesFunction }}">{{ $modalYesText }}</button>
            </div>
        </div>
    </div>
</div>


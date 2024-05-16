<div>
    <form class="form" wire:submit.prevent="triggerEvent">
        @csrf
        <input type="text" wire:model="message" class="form-control" placeholder="Введите сообщение">

        <input type="submit" class="btn btn-primary mt-3">
    </form>
</div>

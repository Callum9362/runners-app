<div
    x-data="{ show: false }"
    x-show="show"
    x-init="@this.on('show-toast', () => { show = true; setTimeout(() => { show = false }, 3000); })"
    :class="{
        'bg-green-500': @this.type === 'success',
        'bg-red-500': @this.type === 'fail'
    }"
    class="fixed px-4 py-2 text-white rounded shadow-lg bottom-5 right-5"
    style="display: none;"
>
    {{ $message }}
</div>

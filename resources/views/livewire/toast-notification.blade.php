<div
    x-data="{ show: false, message: '', type: '' }"
    x-show="show"
    x-init="@this.on('show-toast', (event) => { 
        message = event.detail.message; 
        type = event.detail.type; 
        show = true; 
        setTimeout(() => { show = false }, 3000); 
    })"
    :class="{
        'bg-green-500': type === 'success',
        'bg-red-500': type === 'fail'
    }"
    class="fixed px-4 py-2 text-white rounded shadow-lg bottom-5 right-5"
    style="display: none;"
>
    <span x-text="message"></span>
</div>
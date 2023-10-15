<div class="py-6 min-h-[50vh] relative flex flex-col gap-4">
    <!-- <x-input label="ชื่อคลินิก หรือ โรงพยาบาลสัตว์" wire:model="user" /> -->

    <div class="text-center absolute inset-0 z-50" wire:loading.delay.longer>
        <img class="m-auto" src="{{url('/loading.gif')}}"/>
    </div>

    {{-- <x-toggle label="Use username for admin login" wire:model.lazy="adm" /> --}}
    
    @if ($error)
        <x-badge negative label="{{$error}}" />
    @endif
    
    <x-input wire:model.defer="user" label="Username"
    class="{{$error!=''?'ring-secondary-red':''}}" />

    <x-inputs.password class="py-4 {{$error!=''?'ring-secondary-red':''}}" label="รหัสผ่าน" placeholder="รหัสผ่าน" wire:model.defer="password" />

    {{-- <div class="py-4">
        <x-checkbox label="จดจำรหัสผ่านของฉันเอาไว้" wire:model.defer="remember_me" />
    </div> --}}
    <div wire:loading.remove>
        <x-button class="my-4" lg right-icon="chevron-right" primary
                    wire:click="login" type="button" label="login" />
    </div>

</div>

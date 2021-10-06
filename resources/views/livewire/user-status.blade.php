<div class="card shadow-lg bg-base-300 text-base-content">
    <div class="flex flex-col flex-shrink-0 col-span-3 row-span-3 mx-2 xl:mx-0 w-72 place-self-start xl:w-full">
      
        <div class="grid flex-grow gap-3 p-6 shadow rounded bg-base-200 w-full rounded-tl-none">
            <div class="flex items-center space-x-2">
                <div class="avatar online">
                    <div class="w-16 h-16 p-px bg-opacity-10 mask mask-squircle bg-base-content">
                        <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" class="mask mask-hexagon"></div>
                </div>
                <div>
                    <div class="text-lg font-extrabold">{{$user->name}}</div>
                <div class="text-sm text-base-content text-opacity-60">{{$user->email}}</div>
                </div>
            </div>
            <div class="m-0 divider text-base-content text-opacity-40">Status</div>

            <div class="text-lg font-extrabold">Setting</div>
            <div class="grid gap-3">
                <div class="flex items-center p-1"><span class="w-48 text-xs text-base-content text-opacity-60">Orders</span> <progress max="100" class="progress progress-success" value="50"></progress></div>
                <div class="flex items-center p-1"><span class="w-48 text-xs text-base-content text-opacity-60">Address</span> <progress max="100" class="progress progress-primary" value="30"></progress></div>
                <div class="flex items-center p-1"><span class="w-48 text-xs text-base-content text-opacity-60">Coupon</span> <progress max="100" class="progress progress-secondary" value="70"></progress></div>
                <div class="flex items-center p-1"><span class="w-48 text-xs text-base-content text-opacity-60">Discount</span> <progress max="100" class="progress progress-accent" value="90"></progress></div>
            </div>
        </div>
    </div>
</div>
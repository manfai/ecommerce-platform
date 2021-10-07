<x-layout>

    <div class="grid grid-cols-12 gap-8 px-4 pb-16 pt-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">

        <aside class="col-span-full lg:col-span-7">

            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Job</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="w-12 h-12 mask mask-squircle">
                                            <img src="https://e7bf638d32ecc90fd2ad-06bbba56bc7518e03192bc2b213a0e8b.ssl.cf1.rackcdn.com/Larq785481.JPG?p=2@56w.png" alt="Avatar Tailwind CSS Component">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">
                                            Hart Hagerty
                                        </div>
                                        <div class="text-sm opacity-50">
                                            United States
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon

                                <br>
                                <span class="badge badge-outline badge-sm">Desktop Support Technician</span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">remove</button>
                            </th>
                        </tr>
                        <tr>

                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="w-12 h-12 mask mask-squircle">
                                            <img src="https://e7bf638d32ecc90fd2ad-06bbba56bc7518e03192bc2b213a0e8b.ssl.cf1.rackcdn.com/Larq785481.JPG?p=3@56w.png" alt="Avatar Tailwind CSS Component">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">
                                            Brice Swyre
                                        </div>
                                        <div class="text-sm opacity-50">
                                            China
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Carroll Group

                                <br>
                                <span class="badge badge-outline badge-sm">Tax Accountant</span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">remove</button>
                            </th>
                        </tr>
                        <tr>

                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="w-12 h-12 mask mask-squircle">
                                            <img src="https://e7bf638d32ecc90fd2ad-06bbba56bc7518e03192bc2b213a0e8b.ssl.cf1.rackcdn.com/Larq785481.JPG?p=4@56w.png" alt="Avatar Tailwind CSS Component">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">
                                            Marjy Ferencz
                                        </div>
                                        <div class="text-sm opacity-50">
                                            Russia
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Rowe-Schoen

                                <br>
                                <span class="badge badge-outline badge-sm">Office Assistant I</span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">remove</button>
                            </th>
                        </tr>
                        <tr>

                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="w-12 h-12 mask mask-squircle">
                                            <img src="https://e7bf638d32ecc90fd2ad-06bbba56bc7518e03192bc2b213a0e8b.ssl.cf1.rackcdn.com/Larq785481.JPG?p=5@56w.png" alt="Avatar Tailwind CSS Component">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">
                                            Yancy Tear
                                        </div>
                                        <div class="text-sm opacity-50">
                                            Brazil
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Wyman-Ledner

                                <br>
                                <span class="badge badge-outline badge-sm">Community Outreach Specialist</span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">remove</button>
                            </th>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Job</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <div class="my-4">


                <div class="form-control max-w-md">
                    <label class="label">
                      <span class="label-text"> Apply coupon (if any)</span>
                    </label> 
                    <div class="flex space-x-2">
                      <input type="text" placeholder="Enter Coupon Code" class="w-full input input-ghost input-bordered"> 
                      <button class="btn btn-primary">Confirm</button>
                    </div>
                  </div>

                  
               
            </div>
        </aside>

        <section class="col-span-full lg:col-span-5">


            <livewire:checkout />


        </section>

    </div>


</x-layout>
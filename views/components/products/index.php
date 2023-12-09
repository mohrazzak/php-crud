<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                <tr>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Name</th>
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Price</th>

                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                </tr>
                </thead>

                <tbody class="bg-white">
                <?php
                foreach ($products as $product)
                    require(__DIR__ . '/product.php');
                ?>
                </tbody>
            </table>
        </div>
        <a href="/create" style="background-color: #4338CA;color:white;padding:0.2rem 0.5rem;text-align: center;display:flex;justify-content: center;align-items: center;width:30%;margin:auto;border-radius: 10px;margin-top: 1rem;">Create a product</a>

    </div>
</div>

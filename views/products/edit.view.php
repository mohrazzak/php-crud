<?php require base_path('views/partials/head/index.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/edit">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= $product['id']?>">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                                <label
                                        for="title"
                                        class="block text-sm font-medium text-gray-700"
                                >Title</label>

                                <div class="mt-1">
                                    <input
                                            id="title"
                                            name="title"
                                            rows="3"
                                            size="medium"
                                            style="line-height: 2em;"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Here's an idea for a title..."
                                            value="<?=  $_POST['title'] ?? $product['title']  ?>"
                                    >

                                    <?php if (isset($errors['title'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>                            <div>
                                <label
                                        for="price"
                                        class="block text-sm font-medium text-gray-700"
                                >Price</label>

                                <div class="mt-1">
                                    <input
                                            id="price"
                                            name="price"
                                            rows="3"
                                            type="number"
                                            size="medium"
                                            style="line-height: 2em;"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="$0"
                                            value="<?= $_POST['price'] ?? $product['price'] ?>"
                                    >

                                    <?php if (isset($errors['price'])) : ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['price'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button
                                    type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/head/index.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main style="  background: #eee;
  max-width: 1200px;
  margin: 30px auto;
  padding: 20px;">


    <div class="flex flex-wrap -m-3">


        <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3" style="width: 500px">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">
                <div class="p-4 flex-1 flex flex-col" style="width: 500px">
                    <h3 class="mb-4 text-2xl"><?= $product['title'] ?></h3>

                    <h6 class="mb-4 text-lg">$<?= $product['price'] ?> USD</h6>

                </div>
            </div>
        </div>



    </div>

</main>

<?php require base_path('views/partials/footer.php') ?>
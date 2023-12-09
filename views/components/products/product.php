
<tr>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="flex items-center">


            <div>
                <a class="text-sm font-medium leading-5 text-gray-900" href="/product?id=<?=$product['id']?>"><?= $product['title']; ?></a>
</a>
            </div>
        </div>
    </td>

    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900"><?= '$'.$product['price'];?></div>
    </td>

    <td
        class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
        <a href="/edit?id=<?= $product['id']?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
    <td
        class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
       <form method="post" action="/delete">
           <input type="hidden" name="_method" value="DELETE">
           <input type="hidden" name="id" value="<?= $product['id']; ?>">
           <button class="text-indigo-600 hover:text-indigo-900">Remove</button>
       </form>
    </td>
</tr>
<main>
  <div class="container" style="margin-top: 30px;">
    <div class="p-5 text-center bg-light" style="height:600px ;">
      <form action="controler-remove-item.php" method="post">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($items as $key => $item) { ?>
              <tr>
                <th>
                  <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item['id']); ?>">
                </th>
                <td><?php echo htmlspecialchars($item['title']); ?></td>
                <td><?php echo htmlspecialchars($item['price']); ?></td>
                <td>1</td>
                <td><?php echo htmlspecialchars($item['price']); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary" type="submit">Remove</button>
        </div>
      </form>
      <!-- <form action="controler-checkout.php" method="post">
        <button type="submit" class="btn btn-outline-secondary">Checkout</button>
        </form> -->
    </div>
</main>
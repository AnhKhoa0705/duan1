<section class="bg-white shadow-md rounded-xl mt-16 px-8 py-6">
  <form method="GET" action="index.php" class="flex flex-wrap items-center gap-6">
    <input type="hidden" name="action" value="products">

    <label for="category" class="text-gray-900 text-lg font-semibold">
      Lọc theo danh mục:
    </label>

    <select
      name="category"
      id="category"
      onchange="this.form.submit()"
      class="border border-gray-300 rounded-xl px-5 py-3 text-base text-gray-800 bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200 hover:border-gray-400"
    >
      <option value="">Tất cả</option>
      <?php if (!empty($categoryResult)): ?>
        <?php foreach ($categoryResult as $category): ?>
          <option
            value="<?= htmlspecialchars($category['ID']); ?>"
            <?= ($categoryFilter == $category['ID']) ? 'selected' : '' ?>
          >
            <?= htmlspecialchars($category['Name']); ?>
          </option>
        <?php endforeach; ?>
      <?php else: ?>
        <option value="">Không có danh mục nào</option>
      <?php endif; ?>
    </select>
  </form>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 bg-white">
  <?php if (!empty($productResult)): ?>
    <?php foreach ($productResult as $row): ?>
      <?php
        $imageSrc = (filter_var($row['Image_URL'], FILTER_VALIDATE_URL)) 
                    ? $row['Image_URL'] 
                    : "public/img/" . htmlspecialchars($row['Image_URL']);

        if (isset($row['MinPrice']) && isset($row['MaxPrice'])) {
            $price = ($row['MinPrice'] == $row['MaxPrice']) 
                ? number_format($row['MinPrice'], 0, ',', '.') . " VNĐ" 
                : number_format($row['MinPrice'], 0, ',', '.') . " - " . number_format($row['MaxPrice'], 0, ',', '.') . " VNĐ";
        } else {
            $price = "Liên hệ";
        }
      ?>
      <div class="reveal bg-white border rounded-lg shadow hover:shadow-md transition p-4 flex flex-col">
        <a href="index.php?action=product_detail&id=<?= $row['ID']; ?>" class="block mb-3">
        <div class="w-full h-[300px] overflow-hidden rounded-md">
            <img
            src="<?= $imageSrc; ?>"
            alt="<?= htmlspecialchars($row['Name']); ?>"
            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
            />
        </div>
          <h3 class="text-base font-semibold text-gray-900 mt-2"><?= htmlspecialchars($row['Name']); ?></h3>
        </a>
        <p class="text-sm text-gray-600 mt-1 mb-2">Giá: <span class="font-bold text-red-600"><?= $price; ?></span></p>
        <button class="bg-gray-900 hover:bg-black text-white py-2 px-4 rounded mt-auto">
          Mua ngay
        </button>
      </div>
    <?php endforeach; ?>
  
    <?php else: ?>
    <p class="text-gray-600 text-center col-span-full">Không có sản phẩm nào.</p>
    <?php endif; ?>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    let elements = document.querySelectorAll(".reveal");
    function revealOnScroll() {
      elements.forEach((el) => {
        let position = el.getBoundingClientRect().top;
        let screenHeight = window.innerHeight;
        if (position < screenHeight - 100) {
          el.classList.add("opacity-100", "translate-y-0");
        }
      });
    }
    elements.forEach(el => {
      el.classList.add("opacity-0", "translate-y-5", "transition", "duration-700");
    });
    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
  });
</script>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
<?php require_once __DIR__ . "/footer.php"; ?>

<select id="change_js">
  <optgroup label="Information">
    <option value="/rule/index.php">利用規約</option>
    <option value="/rule/affiliate.php">
      利用規約(アフィリエイト)
    </option>
    <option value="/policy/index.php">プライバシーポリシー</option>
    <option value="/law/index.php">特定商取引法に基づく表記</option>
    <option value="/company/">運営会社</option>
    <option value="/contact/index.php" selected>お問い合わせ</option>
  </optgroup>
</select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  const selected = document.getElementById("change_js");
  selected.onchange = function () {
    window.location.href = selected.value;
  };
</script>

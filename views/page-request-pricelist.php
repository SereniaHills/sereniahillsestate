<?php
/*
Template Name: Request pricelist
*/
?>

<?php 

$post_data = get_post();
echo "<pre>";
print_r($post_data);
exit();
if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'request-pricelist') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}
?>

<main>
    <?php echo $contents; ?>
</main>
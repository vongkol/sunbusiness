<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Customer
        </div>
    </div>
</div>
<hr class="hr" />
<?php
$customer_id = "";
$customer_name = "";
$order = "";
$customer_url = "";
$customer_img = "";
$customer_parth = "";
if ($list_customer->num_rows() > 0) {
    $customer_id = $list_customer->row()->customerid;
    $customer_name = $list_customer->row()->customername;
    $order = $list_customer->row()->orderno;
    $customer_img = $list_customer->row()->img;
    $customer_parth = $list_customer->row()->partimg;
    $customer_url = $list_customer->row()->url;
}
?>
<div  class='row'>
    <div class='col-sm-12'>
        <form method="post" action="<?php echo base_url('customer/do_edit_customer/' . $customer_id); ?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Customer Name :</label>
                <div class="col-sm-4">
                    <input type="text" name="customername" placeholder="Customer Name" class="form-control" value="<?php echo $customer_name; ?>">
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order Number :</label>
                <div class="col-sm-4">
                    <input type="number" name="orderno" placeholder="Order Number" class="form-control" value="<?php echo $order; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Customer URL :</label>
                <div class="col-sm-4">
                    <input type="text" name="customerurl" placeholder="Customer URL" class="form-control" value="<?php echo $customer_url; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Images :</label>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                    <input type="hidden" name="old_img" value="<?php echo $customer_img; ?>"/>
                    <br/>
                    <img src="<?php echo base_url() . $customer_parth . $customer_img; ?>" id="partimg">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-4">
                    <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('customer'); ?>" class="btn btn-info btn-sm">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">

    var loadFile = function (event) {
        var output = document.getElementById('partimg');
        output.width = 150;
        output.src = URL.createObjectURL(event.target.files[0]);
    };

</script>

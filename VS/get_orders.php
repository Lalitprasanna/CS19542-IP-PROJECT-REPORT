<div class="card p-4 mt-4">
    <h2>All Orders</h2>
    <div class="table-container">
        <table id="orderTable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Orders will be loaded here dynamically from get_orders.php -->
            </tbody>
        </table>
    </div>
</div>

<script>
// Fetch all orders with user details
window.onload = function() {
    const orderXhr = new XMLHttpRequest();
    orderXhr.open("GET", "get_orders.php", true);
    orderXhr.onload = function() {
        if (orderXhr.status === 200) {
            document.querySelector("#orderTable tbody").innerHTML = orderXhr.responseText;
        }
    };
    orderXhr.send();
};
</script>

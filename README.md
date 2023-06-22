# UASPPW1_22-505613-SV-21835_COSRX

## Hayya Fatihatuz Zahra
## Penjelasan tentang COSRX
COSRX merupakan salah satu brand skin care asal Korea Selatan yang menghadirkan rangkaian produk skin care sebagai solusi dari berbagai permasalahan kulit seperti dehidrasi, berjerawat, kusam, hingga sensitive semuanya bisa diatasi dengan layering menggunakan produk-produk COSRX. Website COSRX sendiri berguna untuk memudahkan pengguna untuk melihat jenis produk dan harga produk yang dimiliki oleh brand COSRX sendiri, bertanya sesuatu kepada admin, dan melakukan pembelian produk COSRX.

## Bagaimana website yang dibuat menjawab 4 requirement dasar (kriteria penilaian)
### 1. Design rapi mengikuti kaidah atau prinsip design
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/322889af-d4a2-4b96-8ef4-c44855da546f)
>Tampilan halaman web
Konsistensi website:
1. Design website ini menggunakan perpaduan warna putih, abu-abu, hitam, ungu, dan menggunakan sedikit warna merah dan orange. Warna ungu dianggap mampu menarik perhatian, warna hitam memberikan kesan elegan dan mewah, dan warna putih memberikan kesan kesegaran, kebersihan dan kesederhanaan.
```css
:root{
   --purple:#8e44ad;
   --red:#c0392b;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-white:#ccc;
   --light-bg:#f5f5f5;
   --border:.1rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}
```
2. Font yang digunakan pada website ini adalah font Montserrat sebagai primary font dan Sans Serifs sebagai secondary font. Kedua jenis font tersebut diimpor dari Google Fonts.
```css
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
```
```css
*{
   font-family: 'Montserrat', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none;
   border:none;
   text-decoration: none;
   transition:all .2s linear;
}
```
3. Konsistensi pada `search_page.php`
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/6827de57-aacc-450b-aa9a-dd9e73287569)
>Gambar di atas adalah hasil pencarian menggunakan keyword “snail”.

Hasil pencarian menunjukkan bahwa produk yang muncul setelah dilakukan pencarian nama produk menerapkan prinsip design consistency.
```html
<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="search products..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0;">

   <div class="box-container">
   <?php
      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE name LIKE '%{$search_item}%'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
   ?>
   <form action="" method="post" class="box">
      <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="image">
      <div class="name"><?php echo $fetch_product['name']; ?></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
      <input type="number"  class="qty" name="product_quantity" min="1" value="1">
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
      <input type="submit" class="btn" value="add to cart" name="add_to_cart">
   </form>
   <?php
            }
         }else{
            echo '<p class="empty">no result found!</p>';
         }
      }else{
         echo '<p class="empty">search something!</p>';
      }
   ?>
   </div>
  

</section>
```


### 2. Website responsive, dapat diakses melalui device: Mobile, Tablet dan Laptop
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/a3e8c35b-2d03-4f91-9c47-9ed2ca3b39db)
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/9dd70fbc-856e-4a89-9993-7fca09253f5c)
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/0c6158e1-d8c7-4d49-a389-3f17339c72e3)
```css
@media (max-width:991px){
   html{
      font-size: 55%;
   }
}

@media (max-width:768px){
   #menu-btn{
      display: inline-block;
   }

   .header .header-2 .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(--white);
      border-top: var(--border);
      border-bottom: var(--border);
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }

   .header .header-2 .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .header-2 .flex .navbar a{
      display: block;
      font-size: 2.5rem;
      margin:2rem;
   }

   .home .content h3{
      font-size: 3.5rem;
   }
}

@media (max-width:450px){
   html{
      font-size: 50%;
   }

   .heading h3{
      font-size: 3.5rem;
   }

   .title{
      font-size: 3rem;
   }
}
```
Kode tersebut bisa mengubah gaya tampilan elemen-elemen di dalamnya ketika lebar tampilan layar mencapai atau kurang dari 450px, 768px, 911px, dan memungkinkan penyesuaian tampilan yang lebih baik untuk mobile atau tablet.


### 3. Direct feedback ke pengguna website
#### Website ini memiliki beberapa direct feedback kepada pengguna website seperti:
- Pada tampilan awal website, user akan diarahkan pada halaman login dahulu. Jika user tidak memiliki akun, maka user harus melakukan register terlebih dahulu. Setelah melakukan register, data user akan dimasukkan ke dalam database. Pada saat user melakukan login, email dan password akan diverifikasi terlebih dahulu, apakah email dan password tersebut valid atau tidak. Jika tidak, akan muncul message seperti pada gambar di bawah ini. Jika email dan password tersebut valid maka akan langsung masuk he halaman home.php. Begitu pula saat user melakukan log out akun, ketika user mengeklik tombol log out maka tampilan web akan kembali pada halaman login.php.
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/00b0f5c7-89e4-454c-95a4-33fa7ec64544)

>`login.php`
```php
<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $row = mysqli_fetch_assoc($select_users);
      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');
      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');
      }
   }else{
      $message[] = 'incorrect email or password!';
   }
}

?>
```

>`logout.php`
```php
<?php

include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:login.php');

?>
```

- Pada saat user akan menghapus salah satu atau semua produk dari keranjang di halaman `cart.php`, website akan memastikan terlebih dahulu apakah user sudah yakin akan menghapus semua produk yang ada di dalam keranjang atau tidak.
  ```php
  <div class="box">
         <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
         <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="">
         <div class="name"><?php echo $fetch_cart['name']; ?></div>
         <div class="price">$<?php echo $fetch_cart['price']; ?>/-</div>
         <form action="" method="post">
            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
            <input type="submit" name="update_cart" value="update" class="option-btn">
         </form>
         <div class="sub-total"> sub total : <span>$<?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?>/-</span> </div>
      </div>
```
```

![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/52ff7ff7-0a2d-405a-91c9-1746a8e755a0)


### 4. Konten dinamis dari database

#### - Konten dinamis pada `cart.php`
```php
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['update_cart'])){
   $cart_id = $_POST['cart_id'];
   $cart_quantity = $_POST['cart_quantity'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
   $message[] = 'cart quantity updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
   header('location:cart.php');
}

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:cart.php');
}

?>
```
Website akan menampilkan produk apa saja yang ditambahkan ke dalam keranjang belanja.
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/434dd981-4b9a-4bf8-978e-433c976de30b)

#### - Konten dinamis pada `contact.php`
User bisa memberikan pesan atau bertanya sesuatu kepada admin melalui halaman contact.php. Jika pesan sudah terkirim maka akan  mendapatkan notif “message sent successfully! “ seperti pada gambar di bawah ini.
```php
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>
```

![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/a96383ee-13c4-4f50-b44e-a8e3956e19a3)


Saat pesan sudah berhasil di kirim, admin bisa melihat pesan tersebut melalui admin panel pada halaman messages (`admin_contacts.php`).
```php
<section class="messages">

   <h1 class="title"> messages </h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
   ?>
   <div class="box">
      <p> User id : <br><span><?php echo $fetch_message['user_id']; ?></span> </p>
      <p> Name : <br><span><?php echo $fetch_message['name']; ?></span> </p>
      <p> Number : <br><span><?php echo $fetch_message['number']; ?></span> </p>
      <p> Email : <br><span><?php echo $fetch_message['email']; ?></span> </p>
      <p> Message : <br><span><?php echo $fetch_message['message']; ?></span> </p>
      <a href="admin_contacts.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">You have no messages!</p>';
   }
   ?>
   </div>

</section>
```

![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/45ab5233-0897-4d40-beec-a5984b826efc)


#### - Konten dinamis pada `orders.php`
Agar pada halaman orders bisa terlihat seperti pada gambar di bawah, user harus melakukan checkout produk yang sudah dimasukkan ke dalam keranjang terlebih dahulu. Berikut merupakan kode pada `checkout.php`.
```php
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['method']);
   $address = mysqli_real_escape_string($conn, 'Flat No. '. $_POST['flat'].', '. $_POST['street'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['zip_code']);
   $placed_on = date('d-M-Y');

   $cart_total = 0;
   $cart_products[] = '';

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
         $sub_total = ($cart_item['price'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      }
   }

   $total_products = implode(', ',$cart_products);

   $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

   if($cart_total == 0){
      $message[] = 'your cart is empty';
   }else{
      if(mysqli_num_rows($order_query) > 0){
         $message[] = 'order already placed!'; 
      }else{
         mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
         $message[] = 'order placed successfully!';
         mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      }
   }
   
}

?>
```

>Tampilan halaman order pada admin
>
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/2dea5809-c56e-45bc-8a8c-e7095782f564)
```html
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <?php
      $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
      <div class="box">
         <p> User id : <br><span><?php echo $fetch_orders['user_id']; ?></span> </p>
         <p> Placed on : <br><span><?php echo $fetch_orders['placed_on']; ?></span> </p>
         <p> Name : <br><span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Number : <br><span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> Email : <br><span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Address : <br><span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Total products : <br><span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> Total price : <br><span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
         <p> Payment method : <br><span><?php echo $fetch_orders['method']; ?></span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
            <select name="update_payment">
               <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
               <option value="pending">Pending</option>
               <option value="completed">Completed</option>
            </select>
            <input type="submit" value="update" name="update_order" class="option-btn">
            <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">No orders placed yet!</p>';
      }
      ?>
   </div>

</section>
```

>Tampilan halaman orders pada user
>
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/40d68aa1-3c44-4a39-aeb6-512847240185)
```php
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p> <a href="home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <br><br>

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p> Placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
         <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Number : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Address : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> Total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
         <p> Payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

   <br><br><br><br>

</section>

<?php include 'footer.php'; ?>
```

#### - Konten dinamis pada `admin_products.php`
Ketika admin menambahkan produk pada halaman `admin_procucts.php` di admin panel, maka secara otomatis produk akan ditambahkan pada halaman web user juga akan bertambah. 
>Tampilan halaman procucts pada admin
>
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/6b184ecb-f091-42f3-b36c-b3b2f1b4b5b7)

```php
<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['add_product'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = $_POST['price'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_product_name) > 0){
      $message[] = 'product name already added';
   }else{
      $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$name', '$price', '$image')") or die('query failed');

      if($add_product_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'product added successfully!';
         }
      }else{
         $message[] = 'product could not be added!';
      }
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_products.php');
}

if(isset($_POST['update_product'])){

   $update_p_id = $_POST['update_p_id'];
   $update_name = $_POST['update_name'];
   $update_price = $_POST['update_price'];

   mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('uploaded_img/'.$update_old_image);
      }
   }

   header('location:admin_products.php');

}
?>
```

>Tampilan halaman shop pada user
>
>![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/57d4e0c2-2708-48db-a389-c657e7c252f6)

```php
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}
?>
```

#### - Konten dinamis pada `admin_users.php`
Pada halaman users di admin panel, kita bisa melihat akun yang sudah terdaftar pada website, baik itu admin maupun user.
![image](https://github.com/hayyaaa/UASPPW1_22-505619-SV-21840_COSRX/assets/110106870/3b062004-13b1-464f-bb78-3d138e104fe7)

```php
<?php include 'admin_header.php'; ?>

<section class="users">

   <h1 class="title"> user accounts </h1>

   <div class="box-container">
      <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_users['id']; ?></span> </p>
         <p> username : <span><?php echo $fetch_users['name']; ?></span> </p>
         <p> email : <span><?php echo $fetch_users['email']; ?></span> </p>
         <p> user type : <span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['user_type']; ?></span> </p>
         <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
      </div>
      <?php
         };
      ?>
   </div>

</section>
```

   <!-- Start All Title Box -->
   <div class="all-title-box">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <h2>Konfirmasi Pembayaran</h2>

               </div>
           </div>
       </div>
   </div>
   <ul class="breadcrumb">
       <li class="breadcrumb-item"><a href="indexs.php?page=member/produk">Shop</a></li>
       <li class="breadcrumb-item active">Konfirmasi Pembayaran</li>
   </ul>
   <!-- End All Title Box -->

   <!-- Start Cart  -->
   <div class="contact-form-right">
       <div class="container">
           <div class="row">
               <div class="col-lg-4">

                   <div class="form-group">

                       <input type="text" class="form-control" placeholder="Cek Nomor Pesanan" id="noorder"
                           name="noorder">
                   </div>


               </div>
               <div class="col-lg-5">
                   <button onclick="cek_no_order()" class="btn btn-sm btn-danger "> <span class="fa fa-check"></span>
                       Cek
                       Order</button>
               </div>

           </div>


           <div class="row">
               <div class="col-lg-6">
                   <form action="../controller/HomeController.php?aksi=konfirmasi" method="POST" enctype="multipart/form-data">

                       <div class="form-group">
                           <label for="">Atas Nama <span id="namaorder"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Tanggal Order <span id="tglorder"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Total Pembayaran <span id="totalbelanja"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Status Pesanan <span id="status_ord"></span> </label>

                       </div>
                       <div class="form-group">
                           <button type="submit" class="btn btn-sm btn-info"><span class="fa fa-envelope"></span>
                               Konfirmasi Pembayaran</button>
                       </div>

               </div>
               <div class="col-lg-6">
                   <div class="form-group">
                       <label for="">Nama Pengirim</label>
                       <input type="hidden" id="transaksi_id" name="transaksi_id">
                       <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama" required>
                   </div>
                   <div class="row">
                       <div class="col-sm-6">

                           <div class="form-group">
                               <label for="">Bank Pengirim</label>
                               <input type="text" class="form-control" placeholder="Bank Pengirim" name="b_pengirim" required>
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">Bank Penerima</label>
                               <input type="text" class="form-control" placeholder="Bank Penerima" name="b_penerima" required>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">jumlah Kirim</label>
                               <input type="number" class="form-control" name="j_kirim" required>
                           </div>
                       </div>

                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">Tanggal Transfer</label>
                               <input type="date" class="form-control" placeholder="" name="tanggal" required>

                           </div>

                       </div>


                   </div>
                   <div class="form-group">

                       <label for="">Bukti Transfer</label>
                       <input type="file" class="form-control" placeholder="" name="bukti" required>
                   </div>

                   </form>
               </div>


           </div>


       </div>
   </div>
   <!-- End Cart -->

   <script>
   function cek_no_order() {
      var id_js = document.getElementById("noorder").value;
      var json_url = "json/tampil-order.php?id_js="+id_js;
    
      var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
           // Typical action to be performed when the document is ready:
           var myArr = JSON.parse(this.responseText);
    
    
            if (myArr.length == 0) 
             {
             
                console.log("madam")
             }
             else{
    
              for(i = 0; i < myArr.length; i++) 
              {
                alert("NO Order : "+myArr[i][0].idorder+"\n"+"Nama : "+myArr[i][0].namaorder+"\n"+"Status : "+myArr[i][0].status  );
                document.getElementById("namaorder").innerHTML=": " +myArr[i][0].namaorder;
                document.getElementById("tglorder").innerHTML=": " +myArr[i][0].tglorder;
                document.getElementById("status_ord").innerHTML=": " +myArr[i][0].status;
                document.getElementById("totalbelanja").innerHTML=": " +myArr[i][0].totalbelanja;transaksi_id 
                document.getElementById("transaksi_id").value=myArr[i][0].idorder;
              }
    
             }
        }
      };
      
      xhttp.open("GET", json_url, true);
      xhttp.send();
    }
   </script>

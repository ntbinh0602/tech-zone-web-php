<?php include 'master/master.php';



if (isset($_GET['Id_Banner'])){
    $Id_Banner = $_GET['Id_Banner']; 
    $sql = "SELECT * FROM banner WHERE Id_Banner = $Id_Banner";
    $banner = mysqli_query($connect, $sql);
    $ban = mysqli_fetch_assoc($banner);
}

   
if(isset($_FILES['BannerImages'])){
    $file = $_FILES['BannerImages'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'],'banners/'.$file_name);
}
 
if (isset($_POST['BannerName'])){
    $BannerName = $_POST['BannerName'];
    $Status = $_POST['Status'];
    $Description = $_POST['Description'];

        $sql = " UPDATE banner SET BannerName='$BannerName', BannerImages = '$file_name', Status = '$Status',Description = '$Description' WHERE Id_Banner = $Id_Banner";
       
        //trim and lowercase username
        $BannerName =  strtolower(trim($_POST["BannerName"]));
        
        //sanitize username
        $BannerName = filter_var($BannerName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);

        //check username in db
        $results = mysqli_query($connect,"SELECT Id_Banner FROM banner WHERE BannerName='$BannerName'");

        //return total count
        $BannerName_exist = mysqli_num_rows($results); //total records

     
        $BannerName_null = isset($_POST['BannerName']) ? $_POST['BannerName'] : ' ';

        if($BannerName_exist) {
            echo "<span style='color:red' 'font-fize:20px'>(*) Tên banner đã tồn tại</span>";
        }if ($BannerName_null == ' '){
            echo "<span style='color:red' 'font-fize:20px'>(*) Tên banner không được để khoảng trắng</span>";
        }
        else{

       $query = mysqli_query($connect, $sql);
       if($query){
           header('Location: banner.php');
       }
    }
}
?>
<!-- Phần đầu trang -->
<div class="container form">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Sửa banner</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Tên banner</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="BannerName" class="form-control" placeholder="Nhập tên banner"
                                value="<?php echo $ban['BannerName']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Hình ảnh banner</label>
                            <input type="file" name="BannerImages" class="form-control" placeholder="Nhập hình ảnh">
                            <img src="banners/<?php echo $ban['BannerImages']?>" width="500">

                        </div>

                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Status" id="input" value="1" checked="checked">
                                    Hiện
                                </label>
                                <label>
                                    <input type="radio" name="Status" id="input" value="0" checked="checked">
                                    Ẩn
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <input type="text" name="Description" class="form-control" placeholder="Nhập mô tả"
                                value="<?php echo $ban['Description']?>">
                        </div>



                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Phan cuoi tran -->
<?php include 'master/footer.php'; ?>
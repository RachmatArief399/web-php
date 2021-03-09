<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <label for="lesson">Lesson</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="pw">Web Programming</option>
                    <option value="bd">Database</option>
                    <option value="st">Statiska</option>
                    <option value="pkn">PKN</option>
                    <option value="ui">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for="uts_value"> UTS Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="uas_value">UAS Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="assignment_value">Assignment Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <li class="name">Name :</li>
        <li class="nim">Nim :</li>
        <li class="lesson">Lesson:</li>
        <li class="uts_value"> UTS Value : </li>
        <li class="uas_value">UAS Value: </li>
        <li class="assignment_value">Assignment Value </li>
        <li class="value_total">Value Total:  </li>
        <li class="value_in_alphabet">Value in Alphabet: </li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
        <?php
        $name = $_GET['name'];
        $nim = $_GET['nim'];
        $lesson = $_GET['lesson'];
        $uts_value = $_GET['uts_value'];
        $uas_value = $_GET['uas_value'];
        $assignment_value = $_GET['assignment_value'];
        $value_total = $_GET['value_total'];
        $value_in_alphabet = $_GET['value_in_alphabet'];
        
        $simpan = $_GET['simpan'];

        $value_total = $uts_value + $uas_value + $assignment_value;

        if(isset($_GET['name']) 
        AND isset($_GET['nim'])
        AND isset($_GET['lesson'])
        AND isset($_GET['uts_value'])
        AND isset($_GET['uas_value'])
        AND isset($_GET['assignment_value'])
        AND isset($_GET['value_total'])
        AND isset($_GET['value_in_alphabet'])
        ){

        }else{
            echo "mohon diisi dulu";
        }


        echo $name;
        echo "<br>";
        echo $nim;
        echo "<br>";
        echo $lesson;
        echo "<br>";
        echo $uts_value;
        echo "<br>";
        echo $uas_value;
        echo "<br>";
        echo $assignment_value;
        echo "<br>";
        echo $value_total;
        echo "<br>";
        echo $value_in_alphabet;
        echo "<br>";

    ?>
    
    <p>Nama : <?php echo $name?></p>
    <p>Nim : <?= $nim?></p>
    <p>Lesson : <?= $lesson?></p>
    <p>UTS Value : <?= $uts_value?></p>
    <p>UAS Value : <?= $uas_value?></p>
    <p>Assignment value : <?= $assignment_value?></p>
    <p>Value Total : <?= $value_total?></p>
    <p>Value In Alphabet : <?= $Value_In_Alphabet?></p>
</body>
</html>
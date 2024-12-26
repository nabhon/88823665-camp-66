
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="">
            <div class="text-center">
                <h1 class="display-4 fw-bold"> เลขตัวแรกกับตัวสุดท้าย </h1>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label display-6"> เลขตัวแรก </label>
                <input name="start_num" type="number" class="form-control" id="exampleFormControlInput1" placeholder="กรอกเลขตัวแรก" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label display-6"> เลขตัวสุดท้าย </label>
                <input name="end_num" type="number" class="form-control" id="exampleFormControlInput2" placeholder="กรอกเลขตัวสุดท้าย" required>
            </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">หาเลขคู่คี่</button>
        </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start_num = $_POST["start_num"];
            $end_num = $_POST["end_num"];
            for ($i = $start_num; $i <= $end_num; $i++) {
                if ($i % 2 == 0) {;
                    $result = "เลขคู่";
                } else {
                    $result = "เลขคี่";
                }
        ?>
                <div class="shadow card">
                    <div class="card-body">
                        <span class="h5"><?php print($i); ?></span>
                        <span class="h5"> เป็น </span>
                        <span class="h5"><?php echo $result ?></span>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>
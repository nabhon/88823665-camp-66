<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold">เป็นเลขคู่ หรือ เลขคี่</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            if($i % 2 == 0){
                                $result = "เลขคู่";
                            }
                            else {
                                $result = "เลขคี่";
                            }
                        ?>
                            <div class="d-flex justify-content-between align-items-center py-1">
                                <span class="h5"><?php echo $i; ?></span>
                                <span class="h5">เป็น</span>
                                <span class="h5"><?php echo $result ?></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel to Database</title>
    <link rel="stylesheet" href="/css/file_upload.css">
</head>
<body>
    <h2>Upload Excel File</h2>
    <form id="uploadForm" enctype="multipart/form-data" action="file_db_save.php" method="post">
        <input type="file" name="excelFile" accept=".xlsx, .xls, .csv">
        <button type="submit">Upload</button>
    </form>
</body>
<script src="/js/file_upload.js"></script>
</html>


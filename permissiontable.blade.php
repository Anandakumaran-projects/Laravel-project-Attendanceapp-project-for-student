<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Permission Days</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <style type="text/css">
        header {
            background: linear-gradient(to right, #2c73de, #fff);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            width: 100%;
        }
        h1 {
            text-align: center;
        }
        .back {
            float: right;
        }
        .back button {
            background-color: blue;
            border: none;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }
        .header {
            background-color: #2c73de;
            color: #fff;
            line-height: 60px;
        }
        .header h3 {
            text-align: center;
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .main h4 {
            text-align: center;
            letter-spacing: 2px;
            font-size: 20px;
            color: orangered;
        }
     </style>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</head>
<body>
    <header><h1>Veera Education</h1></header>
    <div class="container">
        <div class="back">
            <button onclick="window.history.back();">Back</button>
        </div>
        <h2>Welcome to Veera Education</h2>
        <div class="header">
            <h3>List Of Permission Days</h3>
        </div>
        <hr style="border-bottom: 1px solid #fff;">
        <div class="content">
            <p>Hello Anand</p>
            <p>Date: {{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
        </div>
        <hr style="border-bottom: 1px solid #fff;">
        <div class="main">
            <h4>Permission Days</h4>
            <div class="table">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Fever</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Stomach Pain</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
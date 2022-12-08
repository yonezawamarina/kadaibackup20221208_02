<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="mychart.js"></script>

    <title>kadai</title>
</head>
<body>
<!--ここにグラフが挿入-->
<div style="width: 100%; height: 100%;">
    <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
</div>
</body>
</html>
<script>
// 2) CSVから２次元配列に変換
function csv2Array(str) {
  var csvData = [];
  var lines = str.split("\n");
  for (var i = 0; i < lines.length; ++i) {
    var cells = lines[i].split(",");
    csvData.push(cells);
  }
  return csvData;
}

function drawBarChart(data) {
  // 3)chart.jsのdataset用の配列を用意
  var tmpLabels = [], tmpData1 = [], tmpData2 = [], tmpData3 = [];
  for (var row in data) {
    tmpLabels.push(data[row][0])
    tmpData1.push(data[row][1])
    tmpData2.push(data[row][2])
    tmpData3.push(data[row][3])
  };

  // 4)chart.jsで描画
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: tmpLabels,
      datasets: [
        { label: "ご飯", data: tmpData1, backgroundColor: "pink" },
        { label: "散歩", data: tmpData2, backgroundColor: "yellow" },
        { label: "おやつ", data: tmpData3, backgroundColor: "bulue" }

      ]
    }
  });
}

function main() {
  // 1) ajaxでCSVファイルをロード
  var req = new XMLHttpRequest();
  var filePath = './data/data.csv';
  req.open("GET", filePath, true);
  req.onload = function() {
    // 2) CSVデータ変換の呼び出し
    data = csv2Array(req.responseText);
    // 3) chart.jsデータ準備、4) chart.js描画の呼び出し
    drawBarChart(data);
  }
  req.send(null);
}

main();

</script>
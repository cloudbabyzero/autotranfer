<?php
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2();
$request->setUrl('http://www.168bikeshop.com/aboutus');
$request->setMethod(HTTP_Request2::METHOD_GET);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'Cookie' => 'PHPSESSID=3krsovbdftdug9ofn50nr5sh7s; _lnw_sess_637277_www_168bikeshop_com_=DTsAOQQ8UmgHLFAjBm4CYlI%2FW3QEIABoUzhTClRvATRWIQprAn4HOFEwUGkBIwcxBWZWYQZmUjMLawkmVT1TLQc0ATYEZlM4BnFcdVI4B3ENKQBqBGtSPAcIUDkGMAJ2Uj5bJQRtAD5TaFNvVCQBaFYwCjYCOAc7UTFQNgE4B2YFN1ZmBm1SNQs%2FCTFVP1NmBz0BMQRmU2AGYVwwUm0HOw07ADAEMVIwBzRQZwZlAnZSPlslBG0APFNqU29UJAE5VnMKDwJsB2ZRYlAhAWQHdAUmVnQGb1J3C2YJNVU1U2QHLAE2BG5TMgZ9XDdSbwc6DXQANgQqUmMHY1BhBnYCb1J2W2wEZgA9U2BTd1RzASNWZgoiAlIHY1FhUDYBbwdzBXdWbQYnUj4Lbgk1VTxTfAdeAWgEJVN2Bj5cZ1IzB1ANLwBtBHBSOwc6UDUGewJjUitbZARhACNTb1N3VD0BI1Y5CmECPgc4USRQPwFgB3QFIVYJBjVSZwsoCW1VcFM3B3oBfgR0UzkGIFw8UmwHMg1gACEENVJnB25QaQZjAmVSMltiBGQAOVN4U25UdQFqVjoKagIvB3JRblAjAXIHYgUmViUGPVJgC34JP1V1U2QHPAExBGxTIAZgXG1SLwdxDTUAdQRmUjYHMVAkBjACIVJiW28EOABrUzRTYFQ2AT5WcQplAn4HalExUCABIwc8BSZWbAZgUj4LfglpVWlTOgdrASUEbVNxBmlcMVJnByANKQBmBHdSIQc%2BUD8GOgJ2Uj5bJQRtADpTYFN3VHMBI1ZmCiICUgdrUWJQcQE6B3QFb1ZnBm5SJgtsCSZVPVMj; _lnwacct_637277_www_168bikeshop_com___ts=3e7e04456cb02c00ad08bd648273191c; _lnwacct_637277_www_168bikeshop_com___ie=Lnw'
));
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    echo $response->getBody();
  }
  else {
    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
    $response->getReasonPhrase();
  }
}
catch(HTTP_Request2_Exception $e) {
  echo 'Error: ' . $e->getMessage();
}
?>

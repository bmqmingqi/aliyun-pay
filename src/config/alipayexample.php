<?php

/**
 * @filename alipay.php
 * @encoding UTF-8
 * @author sky
 * @link bmqmingqi@qq.com
 * @license http://www.gnu.org/licenses/
 * @datetime 2019-11-4  16:54:54
 * @version 3.0
 * @ * Description of alipay
 */
return [
    'dev' => [
        'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',
        'appId' => '2019101068272095',
        'rsaPrivateKey' => 'XXXXXXXXXXXXXXXXXXXXXXXXXx+stkzDisTjk42hsgJTGiio3T7LRs5dNJuuQ2OQczgcwV3DE9bkH7dh5nWMmfnrNz6mPouyIf2jGF7LWDSc2FgnyaUhDPx0PG39AGF/MaYDsh9vcY2+NWYMYQUev7FiV6D3lSJjfx9AhhQGSudcGhAbURdA/kaFys41gHXGT0iRHQiIKXsYX18eIJ9/fwFQRPBuG8vKmKRHusKBTSXuZsIyCzT5p/c2CymIeRsta5EKNijT5HP2wn+JHlEXA+JSs9avs9QIVtwCKoPxNfV3F0/JeLDBRs2w+5N5WFden2mNjreaQnx90MeI57hZ3NxPDDa/4GKk/utwIDAQABAoIBABAcy8n290owVbZjVp2CKXr0eHo5lWkdG7Yfcyr9M7++ofIZ59Sef9WT8p8pVEXTdBMkdrxyI/w8NupckBtDG4Dh3ACCetaHz3OkeHt8jM3Okk6H40hszEYdbZUiuaRHTaYuVJkGpkwVV+DlN+MDltLcVZo3fpJNbs1tHTkPNQrgagQl5iwT0C4R3YxcS4O5+5hmtrcEmZdptX/uku4SNCMK/WUX2E7yPOp/bwB95U/NNU4lGg/Q/3cwXGWXSgMKHwDj182nsm+QdhzJLnGisGOmCC6vaDGZgR798SuhWNmPMK/0xE1CgoPYPGI19AGQvmZVLLBvUR5Y5l3MYuFxoukCgYEA1dLUZzYb9SRoiaKJcX1/HuFd+qWbnGGcdhOBm/yoMxBVFMvutTOCTvC+3ttXAJPVQ+QKRK44uLh0kcxR4Rls4IMzSjA689noNOqwkOiXlpndYdTPgb2HVZ6tXveUY9awKQnlYX9jd9s4bWsenTvWDdOQe1wrX2Y7ecRpwBuD23MCgYEAu7ay5fm8zjZTKPADkZ6qPAslB4ovmoOASp2LlD001jmeksupieMcz9FUDResmg/pgQz2UW4rdx6uA5NI7nDy2R0nPEp6WgU2bRE20rPyegyY+vmn6eDaeQ1xv8RHTjMWJ99U1Gf+WbSDjs1lpGmPuCuaaZ4ZxRWdDEd/kfiUVq0CgYEAxrvdjtBLy9y7DLF07Xam4By3LG8f4okW0ufuXvzFmDBl455njyMAyj4YKSnUA0VjwmYA5TTIo2dNcPVmZMEs4L8QvLN3F45AtG4tDYIg4mi/yl3xP7TYREvm941E7kZsFLiN6cBswsmN+KTHH3ytxswMTZus9E4gmVxkrZjlROECgYEAoSIupW1gXl+XXXXXXXXXXXXXXXXXXXXXXXXXX/qBmUSkmdwl22tEFaetGMNIuhPpKcLjO1x2EYBRZoA5Cu8f4iBxXOSW+/3OGmiv9VjTg9cpkxowV54kW4NM9IMobYCrfNOQzseQBbc70KtVTG6TznNEMaM6ZdJNe60CgYEAvHWB2dShVgLfuWOcmRzwOLy1WRrEN30kRdThDF3YozADgZUm/6RDxMj/TQDqW0wQLxwu27yiKP/5AlS0CdecdJV8OJL63G/Z3sYs1gmPWrgAxlLt3GmQjDszfbZXv8taqA85UVRo/t32KU1jMsQRwPaYvrUh4Jh225PvE9gvG8w=',
        'alipayrsaPublicKey' => 'XXXXXXXXXXXXXXXXXXXXXXXX++BMIOWPNeB8LGaJnrYbiFwz5rPejKnFUb8aRpprIe+/sargU2ID0pixVxWQglUASyAauf0nEVOBKINDSvhJExQIHRmfyTbEIjNtCBmIjHvjR3yOMng4KI1C/U6xMWtbDeE+1SQJMsq3YnNL4MHc6y9wuec7280bT4rmWqJf8LzxZM/DrHvHvfHUZZpm8K2BXXrGgFILM/ku7w4G+xGPgJg5D4/OYj3miboSLAonwOxdG36XpscZiZbB+3zgoq/HXj7UcuMLE9YDokONWWskwWIpaCv4zIVFxpMdm4iHB54sJ1RtFMoOY0nxr4KonHVwIDAQAB',
        'signType' => 'RSA2',
        'postCharset'=>'UTF-8',
        'format'=>'json',
        'NotifyUrl'=>'https://XXXXXXXXXXXX/api/v1/aliy/callback',
        ], 
    'product' => [
       'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',
        'appId' => '2019101068272095',
        'rsaPrivateKey' => 'XXXXXXXXXXXXXXXXXXXXXXXXXf4iBxXOSW+/3OGmiv9VjTg9cpkxowV54kW4NM9IMobYCrfNOQzseQBbc70KtVTG6TznNEMaM6ZdJNe60CgYEAvHWB2dShVgLfuWOcmRzwOLy1WRrEN30kRdThDF3YozADgZUm/6RDxMj/TQDqW0wQLxwu27yiKP/5AlS0CdecdJV8OJL63G/Z3sYs1gmPWrgAxlLt3GmQjDszfbZXv8taqA85UVRo/t32KU1jMsQRwPaYvrUh4Jh225PvE9gvG8w=',
        'alipayrsaPublicKey' => 'XXXXXXXXXXXXXXXXXxxx++BMIOWPNeB8LGaJnrYbiFwz5rPejKnFUb8aRpprIe+/sargU2ID0pixVxWQglUASyAauf0nEVOBKINDSvhJExQIHRmfyTbEIjNtCBmIjHvjR3yOMng4KI1C/U6xMWtbDeE+1SQJMsq3YnNL4MHc6y9wuec7280bT4rmWqJf8LzxZM/DrHvHvfHUZZpm8K2BXXrGgFILM/ku7w4G+xGPgJg5D4/OYj3miboSLAonwOxdG36XpscZiZbB+3zgoq/HXj7UcuMLE9YDokONWWskwWIpaCv4zIVFxpMdm4iHB54sJ1RtFMoOY0nxr4KonHVwIDAQAB',
        'signType' => 'RSA2',
        'postCharset'=>'UTF-8',
        'format'=>'json',
        'NotifyUrl'=>'https://XXXXXXXXXXXXXXX.api/v1/aliy/callback',
        ]
];

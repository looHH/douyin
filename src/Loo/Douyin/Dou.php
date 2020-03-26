<?php
namespace Loo\Douyin;

class Dou
{

    private static function getItemInfo($url)
    {
        $oCurl = curl_init();
        $header = [
            'Host: www.iesdouyin.com',
            'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1',
            'Accept: */*',
            'accept-language: zh-CN,zh;q=0.9',
            //'Accept-Encoding: gzip, deflate, br',
            'X-Requested-With: XMLHttpRequest',
            'Connection: keep-alive',
            'Referer: https://www.iesdouyin.com/share/video/6722308029779332359/?region=CN&mid=6701275998849092360&u_code=1613ld41c&titleType=title&utm_source=copy_link&utm_campaign=client_share&utm_medium=android&app=aweme%C3%97tamp=1565234977',
            'Cookie: tt_webid=6781704200433042957; _ba=BA0.2-20200114-5199e-KVQIJqPwi65GGb0Y1Hm5; _ga=GA1.2.1609411005.1578988563; _gid=GA1.2.1599455334.1578988563',
            'TE: Trailers'
        ];
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$header);
        // 返回 response_header, 该选项非常重要,如果不为 true, 只会获得响应的正文
        curl_setopt($oCurl, CURLOPT_HEADER, 0);
        // 是否不需要响应的正文,为了节省带宽及时间,在只需要响应头的情况下可以不要正文
        //curl_setopt($oCurl, CURLOPT_NOBODY, true);
        // 使用上面定义的 ua
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        // 不用 POST 方式请求, 意思就是通过 GET 请求
        curl_setopt($oCurl, CURLOPT_POST, false);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($oCurl, CURLOPT_ENCODING, 'gzip'); // 转换编码
        $sContent = curl_exec($oCurl);
        return $sContent;
    }

    private static function getdytk($url)
    {
        $oCurl = curl_init();
        $header = [
            'Host: www.iesdouyin.com',
            'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
            //'Cookie: tt_webid=6781704200433042957; _ba=BA0.2-20200114-5199e-KVQIJqPwi65GGb0Y1Hm5; _ga=GA1.2.1609411005.1578988563; _gid=GA1.2.1599455334.1578988563',
            'Upgrade-Insecure-Requests: 1',
        ];
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$header);
        // 返回 response_header, 该选项非常重要,如果不为 true, 只会获得响应的正文
        curl_setopt($oCurl, CURLOPT_HEADER, 0);
        // 是否不需要响应的正文,为了节省带宽及时间,在只需要响应头的情况下可以不要正文
        //curl_setopt($oCurl, CURLOPT_NOBODY, true);
        // 使用上面定义的 ua
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        // 不用 POST 方式请求, 意思就是通过 GET 请求
        curl_setopt($oCurl, CURLOPT_POST, false);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($oCurl, CURLOPT_ENCODING, 'gzip'); // 转换编码
        $sContent = curl_exec($oCurl);
        return htmlspecialchars($sContent);
    }

    private static function getData($url)
    {
        $oCurl = curl_init();
        $header = [
            'Host: v.douyin.com',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
            'Upgrade-Insecure-Requests: 1',
            'TE: Trailers'
        ];
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$header);
        // 返回 response_header, 该选项非常重要,如果不为 true, 只会获得响应的正文
        curl_setopt($oCurl, CURLOPT_HEADER, true);
        // 是否不需要响应的正文,为了节省带宽及时间,在只需要响应头的情况下可以不要正文
        curl_setopt($oCurl, CURLOPT_NOBODY, true);
        // 使用上面定义的 ua
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
        // 不用 POST 方式请求, 意思就是通过 GET 请求
        curl_setopt($oCurl, CURLOPT_POST, false);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $sContent = curl_exec($oCurl);

        // 获得响应结果里的：头大小
        $headerSize = curl_getinfo($oCurl, CURLINFO_HEADER_SIZE);
        // 根据头大小去获取头信息内容
        $header = substr($sContent, 0, $headerSize);
        curl_close($oCurl);
        preg_match("/Location: ([^\r\n]*)/i", $header, $res);
        return $res[1];
    }

    private static function getVurl($url)
    {
        $oCurl = curl_init();
        $header = [
            'Host: aweme.snssdk.com',
            'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
            'Upgrade-Insecure-Requests: 1'
        ];
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$header);
        // 返回 response_header, 该选项非常重要,如果不为 true, 只会获得响应的正文
        curl_setopt($oCurl, CURLOPT_HEADER, true);
        // 是否不需要响应的正文,为了节省带宽及时间,在只需要响应头的情况下可以不要正文
        curl_setopt($oCurl, CURLOPT_NOBODY, true);
        // 使用上面定义的 ua
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
        // 不用 POST 方式请求, 意思就是通过 GET 请求
        curl_setopt($oCurl, CURLOPT_POST, false);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $sContent = curl_exec($oCurl);
        // 获得响应结果里的：头大小
        $headerSize = curl_getinfo($oCurl, CURLINFO_HEADER_SIZE);
        // 根据头大小去获取头信息内容
        $header = substr($sContent, 0, $headerSize);
        curl_close($oCurl);
        preg_match("/Location: ([^\r\n]*)/i", $header, $res);
        return $res[1];
    }

    /**
     * 获取源地址
     * @date 2020/3/20 17:50
     * @author lj
     * @param string $url
     * @return string
     */
    public static function getSourceUrl($url)
    {
        $url2 = self::getData($url);
        preg_match('/video\/([0-9]*)/i', $url2, $itemIds);
        $itemId = $itemIds[1];

        $html = self::getdytk($url2);
        preg_match('/dytk: &quot;([^\r\n&quot; });]*)/i', $html, $result);
        $dytk = $result[1];

        $itemUrl = 'https://www.iesdouyin.com/web/api/v2/aweme/iteminfo/?item_ids='.$itemId.'&dytk='.$dytk;
        $itemInfo = self::getItemInfo($itemUrl);
        $itemInfo = json_decode($itemInfo, true);
        $vurl = self::getVurl($itemInfo['item_list'][0]['video']['play_addr']['url_list'][0]);
        return $vurl;
    }
}
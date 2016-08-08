<?php
/**
 * alphapharm - Response.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 19.05.16
 */

namespace App\Classes\Traits;

use Session;

trait Response
{

    public $url = null;

    /**
     * @param bool|int $status
     *
     * @param string   $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function json($status = true, $data = '')
    {
        $type = 'success';

        if ( ! array_key_exists('message', $data) || empty( $data['message'] ) )
        {
            if ( $status )
                $msg = 'Операция выполнена успешно';
            else
                $msg = 'Ошибка при выполнении операции';

            $data['message'] = $msg;
        }

        if ( ! $status )
            $type = 'danger';

        return response()->json( [ 'status' => $type, 'result' => $data ] );
    }

    /**
     * @param     $message
     * @param int $status
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    protected function message($message, $status = 200)
    {
        return response($this->getMessage( $message ), $status);
    }

    /**
     * @param $string
     * @return string
     */
    private function getMessage($string)
    {
        return str_contains( $string, '.' ) ? trans( $string ) : $string;
    }

    /**
     * @param string $url
     * @param bool   $status
     * @param string $message
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sessionFlash($url = '', $status = true, $message = '')
    {
        $type = 'success';

        if ( empty( $message ) )
        {
            if ( $status )
                $message = 'Операция выполнена успешно';
            else
                $message = 'Ошибка при выполнении операции';
        }

        if ( ! $status )
            $type = 'danger';

        Session::flash ( 'result', [ 'status' => $type, 'message' => $this->getMessage ( $message ) ] );

        return redirect ()->to ( is_null($this->url) ? $url : $this->url.$url );
    }

}
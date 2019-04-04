<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataGenerateServiceInterface;

/**
 * Class DataGenerateController
 * @package App\Http\Controllers
 */
class DataGenerateController extends Controller
{
	/**
	 * @var DataGenerateServiceInterface
	 */
	protected $data_generate_service;

	/**
	 * DataGenerateController constructor.
	 * @param DataGenerateServiceInterface $data_generate_service
	 */
	public function __construct(DataGenerateServiceInterface $data_generate_service)
	{
		$this->data_generate_service = $data_generate_service;
	}

	/**
	 * トップページを表示する
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view('ddg/top');
	}

	/**
	 * ダミーデータを生成する
	 *
	 * @throws
	 * @return array
	 */
	public function create(Request $request)
	{
		// バリデーション
		$this->validate($request, [
			'type' => 'required|integer|min:1|max:40'
		]);
		$response = $this->data_generate_service->create($request->all());

		return [
			'items' => $response
		];
	}
}
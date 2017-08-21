
<?php 

/*
structure of cart item:
-----------------------
$_SESSION[UNIQUEID]['cart'] = array(
		'cart_id'	=>	array(
				'id'		=>	5,
				'name'		=>	'Cat',
				'price'		=>	4500,
				'qty'		=>	3,
				'subtotal'	=>	13500
		),
		'cart_id'	=>	array(
				'id'		=>	6,
				'name'		=>	'Dog',
				'price'		=>	10000,
				'qty'		=>	2,
				'subtotal'	=>	20000
		),
	);
------------------------
*/


class Cart 
{

	public function __construct()
	{
		// echo 'cart library execute bhayo';
	}

	// public function insert($item)
	// {
	// 	// debug($item);
	// 	$cart_id = md5($item['id']);

	// 	$price = $item['price'];
	// 	$qty = $item['qty'];

	// 	$item['subtotal'] = $this->subtotal($price, $qty);
	// 	// debug($item);

	// 	$_SESSION[UNIQUEID]['cart'][$cart_id] = $item;

	// 	debug($_SESSION[UNIQUEID]['cart']);
	// }

	public function insert($item)
	{
		// debug($item);
		$cart_id = md5($item['id']);

		if(array_key_exists($cart_id, $_SESSION[UNIQUEID]['cart'])) {
			$item['qty'] = $_SESSION[UNIQUEID]['cart'][$cart_id]['qty'] + 1;
		} 

		$qty = $item['qty'];
		$price = $item['price'];
		

		$item['subtotal'] = $this->subtotal($price, $qty);
		// debug($item);

		$_SESSION[UNIQUEID]['cart'][$cart_id] = $item;

		// debug($_SESSION[UNIQUEID]['cart']);
	}

	public function update()
	{

	}

	public function delete($pid)
	{
		$cart_id = md5($pid);
		unset($_SESSION[UNIQUEID]['cart'][$cart_id]);
	}

	public function items()
	{
		return $_SESSION[UNIQUEID]['cart'];
	}

	public function subtotal($price, $qty)
	{
		return $price * $qty;
	}

	public function total()
	{

	}
}
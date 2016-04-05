# Imaginelib

A small Library for CodeIgniter to be able to use Imagine (https://github.com/avalanche123/Imagine)

## Usage:

Download Imagine from the above link and place the folder in your libraries folder.
Also include this Class in your libraries folder.

Finaly add this to the construct of your Controller:
```
$this->load->library('imaginelib');
```

### Example
```
...
public function index()
{
  $file       = realpath( FCPATH . 'assets/media/2016/03/rick.png' );
  $imagine    = new \Imagine\Gd\Imagine();
  $img        = $imagine->open( $file );
  $img->crop( new \Imagine\Image\Point(0, 0), new \Imagine\Image\Box(50, 50) );
  $img->save( FCPATH . 'assets/media/2016/03/rickCropped.png' );
}
```

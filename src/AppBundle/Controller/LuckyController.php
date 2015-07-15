namespace AppBundle\Controller;

use Symfony\BundleFrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

  public function numberAction()
  {
    $number = rand(0, 100);
    return new Response('<html><body>Lucky Number:'.$number.'</body></html>');
  }

}

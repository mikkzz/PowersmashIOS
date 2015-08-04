<?php

namespace PowersmashIOS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
  /**
   * Index for the Blog section
   * @return Dynamic page
   * @TODO Render dynamic contents from the database
   */
  public function indexAction()
  {
    return $this->render('PowersmashBlogBundle:Blog:index.html.twig')
  }
  /**
   * Blog post view controller
   * @param  integer $page selects the number to be viewed from the database
   * @return Blog post
   */
  public function viewAction($page)
  {
    return $this->render('')
  }
}

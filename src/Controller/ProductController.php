<?php
namespace App\Controller;

// ...
use App\Entity\Category;
use App\Entity\Product;
use App\Repository\ProductRepository;
//use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        // relates this product to the category
        $product->setCategory($category);

        $entityManager->persist($category);
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );
    }

    #[Route('/product/show/{id}', name: 'product_show')]
    public function show(ProductRepository $productRepository, int $id): Response
    {
        $category = $productRepository->find($id);
        dd($category);
        //$products = $category->getProducts();
        // ...


       return new Response('response');
        
    }
}
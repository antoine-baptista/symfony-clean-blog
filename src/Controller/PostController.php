<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('post/home.html.twig', [
            'controller_name' => 'PostController',
        ]);

    }

    #[Route('/post/{id}', name: 'post_view')]
    public function post($id): Response
    {
        return $this->render('post/view.html.twig', [
            'post' => [
                'title' => 'Le titre de l\'article',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sem diam, congue quis ligula ut, venenatis mattis nulla. Donec ac lorem at nibh elementum egestas. Suspendisse eu gravida elit. Sed quis justo urna. Nullam porta sed enim a viverra. Maecenas vestibulum tortor leo, id volutpat mauris maximus ac. Maecenas viverra justo quis nibh varius fringilla. Maecenas vitae dolor id elit imperdiet sollicitudin. Nulla facilisi. Ut lacus nisl, volutpat vitae sapien fringilla, scelerisque mattis justo. Etiam eu dapibus nibh, sed porttitor lorem. Nulla risus felis, tincidunt ut mauris eget, facilisis auctor tellus.

                Sed ut sem quis purus tristique facilisis. Ut quis lorem eu lacus lacinia aliquam. Ut tristique convallis neque, at vestibulum sem faucibus nec. In facilisis, ante ut accumsan lobortis, nunc sapien blandit lectus, at viverra odio turpis id ipsum. Nunc a metus at massa mollis bibendum. Cras felis nisi, consectetur in pulvinar in, dictum vel purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis sapien elit, egestas id accumsan sed, semper nec sapien. In blandit molestie nulla, nec luctus massa vehicula tempus. Praesent turpis diam, condimentum et volutpat sed, pharetra vel leo.
                
                Sed at sodales leo. Sed accumsan nisl ut est dapibus scelerisque. Etiam molestie tincidunt neque scelerisque lobortis. Nulla aliquam sed elit ut pellentesque. Donec porttitor, tortor sed ullamcorper ultricies, arcu enim viverra eros, quis tincidunt est urna eget mi. Ut lobortis arcu quis viverra tempor. Praesent quis sollicitudin lorem, ut porta purus. Sed aliquet, magna at commodo ullamcorper, nunc dui semper augue, in tempor urna velit eget ex. Fusce blandit in mauris eu fermentum. Morbi feugiat imperdiet dui, at feugiat sem feugiat id.
                
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi eleifend, justo quis fermentum cursus, nulla odio semper risus, vitae pharetra nisi sem ut metus. Donec eget consequat eros. Mauris quis justo et diam porta commodo quis et metus. Curabitur et ornare risus. Cras cursus lorem at diam molestie, eget sagittis arcu aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis pharetra nibh, nec dapibus diam. Donec nisl nisl, bibendum et hendrerit eu, lacinia et orci.
                
                Cras tincidunt ante eu odio consectetur laoreet. Quisque mi risus, viverra sit amet mollis ut, blandit vitae nunc. Quisque elementum urna orci, sed ornare metus placerat sed. Vivamus accumsan dui nec est pharetra fermentum. Duis tempor, sem et gravida tempus, leo ante viverra metus, ut porttitor tortor nibh eget ante. Aenean quis lacinia mauris, nec mattis urna. Nulla ante dolor, semper non nibh id, volutpat porttitor est. Nunc auctor dignissim urna. Vivamus pretium ex imperdiet, dignissim orci quis, ultrices sapien. Nam tempus non lectus sed imperdiet.
                
                Proin eleifend ipsum turpis, sit amet consectetur dolor molestie vitae. Duis sem urna, laoreet et arcu vitae, vestibulum aliquam felis. Mauris nec tortor at leo rhoncus pretium. Nunc sed nunc convallis, gravida felis non, sollicitudin lorem. Fusce eu ante urna. Nulla at diam auctor mi venenatis feugiat a eu est. In eget ligula scelerisque, scelerisque lacus a, tincidunt massa. Mauris consectetur nec augue hendrerit tempor.
                
                Quisque eget bibendum eros, vitae imperdiet ipsum. Praesent venenatis pellentesque condimentum. Vivamus eleifend sapien mollis, vehicula felis fringilla, fringilla urna. Proin in lacus nisi. Praesent et sagittis lacus, ornare euismod lorem. Donec lacinia quam vitae ligula pellentesque, non condimentum nunc tristique. Ut vitae auctor sem, ultrices fringilla orci. Nunc lorem metus, laoreet sit amet purus nec, efficitur posuere est. Aenean ultrices ullamcorper massa, ac sollicitudin mi imperdiet mattis. Donec nec ultrices nisi. Integer tincidunt, urna pellentesque ornare porttitor, orci justo pretium quam, nec eleifend nulla tortor et velit.
                
                Sed eu tristique enim, vel eleifend dui. Proin metus ex, pellentesque at sodales nec, egestas a neque. Quisque non placerat dui. Sed condimentum risus velit, a semper tellus molestie sit amet. Nunc vel pulvinar felis, ut malesuada leo. Proin interdum convallis lorem, vitae dictum urna hendrerit non. Ut suscipit dapibus hendrerit. Fusce cursus felis in metus sollicitudin, non feugiat dolor ullamcorper. Cras vehicula at sapien in mattis. Nullam nunc ligula, congue ac egestas ac, semper at dui. Ut at ligula vel est faucibus rhoncus. Aliquam non nulla faucibus, ornare nisl at, molestie metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                
                Maecenas facilisis consequat neque, in molestie lectus fringilla non. Mauris volutpat finibus est. Aliquam velit lectus, accumsan sit amet mauris id, laoreet porttitor dui. Aenean dapibus felis ac venenatis fringilla. Mauris arcu ligula, consequat nec risus ut, sollicitudin consequat massa. Pellentesque varius arcu at nisi faucibus ullamcorper. Integer quis facilisis arcu, a fringilla ipsum.
                
                Morbi ut diam velit. Praesent nulla ante, posuere sit amet leo in, feugiat laoreet lacus. Maecenas nec risus mauris. Phasellus rutrum tincidunt dolor, quis fermentum diam consequat non. Proin tincidunt lorem velit, in condimentum felis mollis eu. Cras eu euismod turpis. Maecenas nec dui at leo tincidunt laoreet. Mauris malesuada et leo eget rutrum. Sed sollicitudin non odio ut egestas.'
            ]
            // 'controller_name' => 'PostController',
        ]);

    }

    
}

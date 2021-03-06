<?php
declare(strict_types=1);

namespace App\Manager;

use App\Entity\Images;

class ImagesManager extends AbstractBaseManager
{

    public function createOrRetrieveBy(array $findKey, bool $main = false)
    {
        $image = $this->entityManager->getRepository($this->class)->findOneBy([$findKey['key'] => $findKey['value']]);

        if(!$image instanceof Images) {
            $image = $this->create();
            $image->setUrl($findKey['value']);
            if($main) {
                $image->setMainImage(true);
            }
            $this->save($image, true);
        }
        return $image;
    }
}
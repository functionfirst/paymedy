<?php

class AchievementType
{

    public function name()
    {

    }
    public function difficulty()
    {
        return 'intermediate'
    }

    public function icon()
    {
        return '/images' . '';
    } 
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'Welcome Aboard!';
    }
}

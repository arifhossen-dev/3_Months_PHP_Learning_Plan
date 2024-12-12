<?php

class User
{

}

abstract class Achievement
{
    public function __construct(
        public string $name,
        public string $description,
        public string $icon
    ) {

    }

    abstract public function qualifier(User $user);
}

class FirstPostAchievement extends Achievement
{
    public function qualifier(User $user){
        // $user->post()->count > 0
        return true;
    }
}

class AnotherAchievement extends Achievement
{
    public function qualifier(User $user){
        // logic
        return false;
    }
}


$firstPost = new FirstPostAchievement(
    'First Post',
    'This my first post',
    'first-post.svg'
);

echo $firstPost->qualifier(new User) ? 'They qualify' : 'They do not qualify';

$secondPost = new AnotherAchievement(
    'second Post',
    'This my second post',
    'second-post.svg'
);
echo $secondPost->qualifier(new User) ? 'They qualify' : 'They do not qualify';
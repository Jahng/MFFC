<?php


require_once './vendor/autoload.php';

// 初始化容器
new MFFC\Container\MFFCcontainer(new League\Container\Container);

// 路由配置
require_once './config/routes.php';


//$output = new Symfony\Component\Console\Output\StreamOutput(fopen('./log/debug.log', 'a', false));
//var_dump($output);exit;
//$logger = new Symfony\Component\Console\Logger\ConsoleLogger($output);
//$logger->error('The file wwwww does not exist.');


//$container->add('StreamOutput', function(){
	//return new Symfony\Component\Console\Output\StreamOutput(fopen('./log/debug.log','a',false));
//});

//$container->add('ConsoleLogger','Symfony\Component\Console\Logger\ConsoleLogger')->withArgument('StreamOutput');

//$container->get('ConsoleLogger')->error('hello world');

//var_dump($output->fetch());
<?php
/* 
	继承关键词
	final:最终，修饰类和方法。最终类不让继承，最终方法不能重写
 */
final class Test
{
	
}

/* 
	不让继承，报致命错误
 */
// class T extends Test
// {
	
// }


/* 
	允许类中的方法使用final关键词，只是说指定的方法是最终方法，这个方法不让重写
 */
class T 
{
	//最终方法，不让重写
	 public final function say()
	{
		
	}
	
	public function run()
	{
		
	}
}

class TT extends T
{
	public function say()
	{
		
	}
}

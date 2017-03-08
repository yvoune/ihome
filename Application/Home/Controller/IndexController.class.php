<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    
    public function index(){ 
       $homepopular = M('homepopular');
       $homepopular_list = $homepopular->limit(3)->order('star')->select();
       $gallery = $homepopular->limit(4)->select();
       
       $this->assign('homepopular_list',$homepopular_list);
       $this->assign('gallery',$gallery);

       $cache_a= S('site_name');

       if (empty($cache_a)) {
         $system_info=M('system_conf')->find();
         $cache_a=S('site_name',$system_info);
       }
       
      //  print_r($cache_a['site_name']);exit();
       
       $this->assign('title','首页—'.$cache_a['site_name']);
       
       $this->display();
//        $news = M('News');
		
// 		$page_cout=3;
		
// 		$page_num=I('page_num')>0?I('page_num'):1;
		
		
// 		$start_index=($page_num-1)*$page_cout;
// //		$start_index=0;
		
// 		$news_list=$news -> alias('n')
// 						 -> field('n.id as id,title,name,sort_name,content,img,date')
// 						 -> join('author ON author_id=author.id')
// 						 -> join('news_sort ON sort_ename=news_sort.e_name')
// 						 -> order('id desc')
// 						 -> limit($start_index,$page_cout)
// 						 -> select();
		
// 		$this->assign('news_list',$news_list);
    }
    public function publishing(){
      // 保存反馈信息到数据库
      if (IS_POST) {
        $publishing_m=D('publishing');
        //自动填充创建时间
        $_POST['publishingTime']=date('Y-m-d H:i:s');
        // 上传图片
        // $upload=new Upload();
        // $upload->maxSize=10240000;
        // $upload->exts=array('jpg','gif','jpeg','png');
        // $upload->savePath='/';
        // $info=$upload->upload();
        // if (!$info) {
        //   $this->error($upload->getError());
        // }else{
        //   // ./2017-03-1408/58003ad34b822.jpg
        //   $_POST['imgs']=$info['imgs']['savepath'].$info['imgs']['savename'];
        // }
        // 做验证、自动完成数据填充
        if ($publishing_m->create()) {
          //添加房源
          if ($publisingId=$publishing_m->add()) {
            $this->success('房源信息已提交',U('Index/publishing'));
          } else {
            $this->error('房源信息提交失败',U('Index/publishing'));
          }
        }else {
          // 验证失败
          $this->error($publishing_m->getError());
        }
      } else{
        $cache_a= S('site_name');

       $this->assign('title','发布房源 - '.$cache_a['site_name']);
      // do it
       $this->display();
      }
    }
    // public function about_us()
    // {

    //    $cache_a= S('site_name');
    //    $this->assign('title','关于我们 - '.$cache_a['site_name']);

    // 	// do it
    //    $this->display();
    	
    // }

 	  public function contact_us(){
      // 保存反馈信息到数据库
      if (IS_POST) {
        $fb_m=M('ClientFeedback');
        //自动填充创建时间
        $_POST['fb_time']=date('Y-m-d H:i:s');
        // 做验证、自动完成数据填充
        if ($fb_m->create()) {
          //添加反馈信息
          if ($fb_id=$fb_m->add()) {
            $this->success('信息已反馈',U('Index/contact_us'));
          } else {
            $this->error('信息反馈失败',U('Index/contact_us'));
          }
        }else {
          // 验证失败
          $this->error($fb_m->getError());
        }
      } else{
        $cache_a= S('site_name');

       $this->assign('title','联系我们 - '.$cache_a['site_name']);
      // do it
       $this->display();
      }
       
    	
    } 
    //新增加
    public function news(){
		$news = M('News');
		
		$page_cout=10;
		
		$page_num=I('page_num')>0?I('page_num'):1;
		
		$start_index=($page_num-1)*$page_cout;
//		$start_index=0;
		
		$news_list=$news -> alias('n')
						 -> field('n.id as id,title,name,sort_name,content,img,date')
						 -> join('author ON author_id=author.id')
						 -> join('news_sort ON sort_ename=news_sort.e_name')
						 -> order('id desc')
						 -> limit($start_index,$page_cout)
						 -> select();
		
		$pattern="/&lt;[img|IMG].*?src=[&quot;|&lsquo;](.*?(?:[\.gif|\.jpg]))[&quot;|&lsquo;].*?[\/]?&gt;/";
		$replacement = '';
		
		foreach($news_list as &$value) {
			$value['content'] = preg_replace($pattern, $replacement, $value['content']);
		}
		unset($value);
		
		$this->assign('news_list',$news_list);
		
//		select count(*) from News
		$news_total_num=$news->count();
//		总页数
		$total_num=ceil($news_total_num/$page_cout);
		$cur_page_style;
		for($i=1;$i<=$total_num;$i++){
			if($page_num==$i){
				$cur_page_style="style='background-color: #000000;color: #FFFFFF'";

			}

			$page_html.="<a ".$cur_page_style." class='btn' href=".U('Index/news',array('page_num'=>$i)).">$i</a>&nbsp;&nbsp;&nbsp;";
			$cur_page_style='';
			
		}
		$this->assign('page_html',$page_html);

    //新增加
       $cache_a= S('site_name');
       $this->assign('title','新闻列表 - '.$cache_a['site_name']);
    	// do it 
     
       $this->display();
    	
    }
    public function login(){
       $cache_a= S('site_name');
       $this->assign('title','登录 - '.$cache_a['site_name']);
    	// do it
       $this->display();
    	
    }
    public function register(){
       $cache_a= S('site_name');
       $this->assign('title','注册 - '.$cache_a['site_name']);

    	// do it
       $this->display();
   }
	public function news_detail(){
    	$id = I('id');
		
    	$news = M('News');
		
		$news_recent = $news -> field('id,title,img,date') -> order('id desc') -> limit(3) -> select();
		
		$news_detail = $news -> alias('n')
							 -> field('n.id as id,title,name,sort_name,content,img,date,introduction')
							 -> join('author')
							 -> join('news_sort')
							 -> where('n.id='.$id.' AND author.id=author_id AND sort_ename=news_sort.e_name')
							 -> select();
		
		$this -> assign('news_recent',$news_recent);
    	$this -> assign('news_detail',$news_detail);
		$this -> assign('id',$id);
    	

       $cache_a= S('site_name');
       $this->assign('title','新闻详情 - '.$cache_a['site_name']);

        	// do it
        $this->display();
      	
    }
    //删除订阅的文章
    public function take_del($value='')
      {
          $news_take = M('NewsTake');
          $news = M('News');

          $id=intval($_GET['id']);
          if ($id>0) {
              $news_take ->delete($id);
              $this->success('删除成功！',__MODULE__.'/Index/news_take');
          }else{
              $this->error('删除失败！');

          }
          
      }
      //添加订阅的文章，在新闻详情页点击按钮
    public function take_add($value='')
      {
          $news_take = M('NewsTake');
          $news = M('News');

          $id = I('id');
          if ($_SESSION['user']['id']==0) {
               $this->success('请先登录！',U('index/login'));
            
            exit();
          }
          if ($id>0) {
              // $data['take']='1';
              // $news->where('id='.$id)->save($data);
              $date['news_id']=$id;
              $date['uid']=$_SESSION['user']['id'];
               // $new_add =  $news->where('id='.$id)->select();
               // print_r($new_add);
               $news_take->add($date);
               $this->success('订阅成功！',__MODULE__.'/Index/news');
               // echo $news_take->getLastSql();exit();         
          }else{
              $this->error('订阅失败！');
          }
          
      }  
      //查看订阅的文章    
    //文章订阅
    public function news_take(){  

        $this->showLogo();
         $this->showt_email(); 
         $cache_a= S('site_name');
         $news = M('News');
         $news_take  = M('NewsTake');
         $id=$_SESSION['user']['id'];

         $user_new_take = $news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id') -> select();
         $page_cout=3;
         $user_total_num=count($user_new_take);
         
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page       = new \Think\Page($user_total_num,$page_cout);
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        
        $news_take=$news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this -> assign('news_take',$news_take);

         $this->assign('title','查看订阅的文章 - '.$cache_a['site_name']);
        // do it
         
         if ($user_total_num != 0) {
          $this->display();
         }else{
          $this -> success("您还没有订阅文章，请前往新闻页面！",__MODULE__.'/Index/news');
        }
            
    } 

    //浏览足迹
    public function browse_footprin(){
        $this->showLogo();
         $this->showt_email(); 
         $cache_a= S('site_name');
         $news = M('News');
         $news_take  = M('NewsTake');
         $id=$_SESSION['user']['id'];

         $user_new_take = $news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id') -> select();
         $page_cout=3;
         $user_total_num=count($user_new_take);
         
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page       = new \Think\Page($user_total_num,$page_cout);
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        $news_take=$news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this -> assign('news_take',$news_take);

         $this->assign('title','浏览足迹 - '.$cache_a['site_name']);
        // do it
         if ($user_total_num != 0) {
          $this->display();
         }else{
          $this -> success("您还没有浏览记录，请前往新闻页面！",__MODULE__.'/Index/news');
        }
        

      }   
	 public function search(){
	       $news=M('news');


        $news_take=$news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this -> assign('news_take',$news_take);

         $this->assign('title','浏览足迹 - '.$cache_a['site_name']);
        // do it
         if ($user_total_num != 0) {
          $this->display();
         }else{
          $this -> success("您还没有浏览记录，请前往新闻页面！",__MODULE__.'/Index/news');
        }
    }

    //喜欢的文章
    public function favorite_article(){
        $this->showLogo();
         $this->showt_email(); 
         $cache_a= S('site_name');
         $news = M('News');
         $news_take  = M('NewsTake');
         $id=$_SESSION['user']['id'];

         $user_new_take = $news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id') -> select();
         $page_cout=3;
         $user_total_num=count($user_new_take);
         
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page       = new \Think\Page($user_total_num,$page_cout);
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        
        $news_take=$news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this -> assign('news_take',$news_take);

         $this->assign('title','喜欢的文章 - '.$cache_a['site_name']);
        // do it
         if ($user_total_num != 0) {
          $this->display();
         }else{
          $this -> success("您还没有收藏喜欢的文章，请前往新闻页面！",__MODULE__.'/Index/news');
        }
    }
    //显示头像
    public function showLogo(){
      $Model = new \Think\Model() ;
      $result=$Model->query("SELECT * FROM client_user WHERE user_name ='".$_SESSION['username']."'");
      if($result[0]['head_photo']){
        $this->assign('head_photo',$result[0]['head_photo']);
      }else{
        $this->assign('head_photo',"Public/head_logo/default_head_logo.jpg");
        
      }
    }

    //显示邮箱地址
    public function showt_email(){
      $Model = new \Think\Model() ;
      $result=$Model->query("SELECT email_address FROM client_user WHERE user_name ='".$_SESSION['username']."'");
      $email_address=$result[0]['email_address'];
      $this->assign('email_address',$email_address);
      
    }

    //用户信息修改
    public function edit_message(){
      $cache_a= S('site_name');
          $this->assign('title','修改资料 - '.$cache_a['site_name']);

      $this->showLogo();
      $this->showt_email();

      $client_m = D('clientUser');
      $client_info = $client_m -> where("`user_name`='".$_SESSION['username']."'")->find();
      // $client_info = $client_m -> where('id='.I('id')) ->find();
      // print_r($client_info);
      $this -> assign('client_info',$client_info);

      $this->display('Index/edit_user_info');
    }

   public function lookfor(){
   	$news=M('news');
	       $re=I('search');
	       
	       $result=$news->where("title like '%".$re."%'")->select();
	       
	       $this->assign('num',count($result));
	       $this->assign('result',$result);
	       
	       $this->display();
   }
}

// <?php
// namespace Home\Controller;
// use Think\Controller;
// class IndexController extends Controller {
//     public function index(){
//         // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//         $Data = M('roomdetails');//实例化Data数据模型
//         $result = $Data->find();
//         $this->assign('result',$result);
//         $this->display();
//     }
// }

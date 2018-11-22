// 问卷js部分
$(function(){
  $('.cj-duo').click(function(){//多选题题目创建
    duo_que=$('.duo-que').val();
    duo_a=$('.sel-a').val();
    duo_b=$('.sel-b').val();
    duo_c=$('.sel-c').val();
    duo_d=$('.sel-d').val();
    if(duo_que==''||duo_a==''||duo_b==''||duo_c==''||duo_d==''){
      alert('问题和选项的内容不能为空，请重新输入!!');
    }else{
      $('#list-que').append('<li class="que i2"><label> '+duo_que+'(多选)</label><br><label><input type="checkbox" /> '+duo_a+'</label> <br><label><input type="checkbox" /> '+duo_b+'</label><br> <label><input type="checkbox" /> '+duo_c+'</label> <br><label><input type="checkbox" /> '+duo_d+'</label><button class="btn btn-danger pull-right delete duo-btn">删除</button><hr></li>');
    }
  });
  $('.cj-dan').click(function(){//单选题题目创建
    dan_que=$('.dan-que').val();
    dan_a=$('.dan-a').val();
    dan_b=$('.dan-b').val();
    dan_c=$('.dan-c').val();
    dan_d=$('.dan-d').val();
    if(dan_que==''||dan_a==''||dan_b==''||dan_c==''||dan_d==''){
      alert('问题和选项的内容不能为空，请重新输入!!');
    }else{
      $('#list-que').append('<li class="que i1"><label>'+dan_que+'(单选)</label><br><label><input type="radio" name="que"/> '+dan_a+'</label> <br><label><input type="radio" name="que"/> '+dan_b+'</label><br> <label><input type="radio" name="que"/> '+dan_c+'</label> <br><label><input type="radio" name="que"/> '+dan_d+'</label><button class="btn btn-danger pull-right delete dan-btn">删除</button><hr></li>');
    }
  });
  $('.cj-j').click(function(){//简答题目创建
    j_que=$('.j-que').val();
    if(j_que==''){
      alert('问题的内容不能为空，请重新输入!!');
    }else{
      $('#list-que').append(' <li class="que i1"><label >'+j_que+'(简答)</label><br><input type="text" class="i-text"/> <button class="btn btn-danger pull-right delete j-btn">删除</button><hr></li> ');
    }
  });
   $('#list-que').on("click",".que .delete",function(){
    index=$(this).parent().index('li');
       if(confirm('你确定要删除这道题吗？')){  //动态绑定删除键操作
        $('.que').eq(index).css({'display':'none'});
      }
   });
  
})
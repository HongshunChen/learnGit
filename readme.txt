#git command
git branch -va
　　可以查看本地+远程分支列表
git branch -v
    查看本地分支列表
git config --global credential.helper store
使用http协议传输时要输入用户名和密码，运行它可记录存储用户名和密码，下次不用再输入
git checkout -b dev
我们创建dev分支，然后切换到dev分支
git checkout命令加上-b参数表示创建并切换，相当于以下两条命令：
git branch dev
git checkout dev
用git branch命令查看当前分支：
git branch
可以切换回master分支
 git checkout master
我们把dev分支的工作成果合并到master分支上：
git merge dev
合并完成后，就可以放心地删除dev分支了：

git branch -d dev
也可以运行git push origin serverfix:serferfix ，
它的意思是“上传我本地的 serverfix 分支到远程仓库中去，仍旧称它为 serverfix 分支”
通过此语法，你可以把本地分支推送到某个命名不同的远程分支：若想把远程分支叫作awesomebranch，可以用git push origin serverfix:awesomebranch 来推送数据
　git branch -va
　　可以查看本地+远程分支列表
设置全局的忽略文件
git config  --global core.excludesfile ~/.gitignore_global(文件名)

# 
vi ~/.gitconfig (在vim中显示后面这个功能)

git config --list 显示所有的配置变量
git config --global --list 显示所有的全局配置变量
提交后，用git diff HEAD -- readme.txt命令可以查看工作区和版本库里面最新版本的区别：
　删除远程分支 git push origin :branchname
建立远程分支 git push origin branchname

重设分支地址 git remote set-url origin  git@git.utobo.net:orivon/newCrm.git

ipconfig

reset是指将当前head的内容重置，不会留任何痕迹。

Sets the current head to the specified commit and optionally resets the index and working tree to match. 

 git reset --hard HEAD~3  (merge的提交比较多的时候，不易用) 
git reset --hard 4e5a7e70c186633e6938ee9ae5ba4f931dfea5de
git push origin -f (强行推远程版本)


会将最新的3次提交全部重置，就像没有提交过一样。


根据--soft --mixed --hard，会对working tree和index和HEAD进行重置。

 git 上往文件写东西：$ echo "hello b from a" >>b.txt
$ git commit -a -m "hello a from b"相当于下面两步

$ git add *.txt
$ git commit -m "hello a from b"
当本地分支与远程分支之间发生冲突时候，执行下面步骤：

git rebase 从建一个基点

git add .
修改冲突
git rebase --continue

git push origin master
删除远程分支
git push origin :branch-name

冒号前面的空格不能少，原理是把一个空分支push到server上，相当于删除该分支。

git cherry-pick 版本号    找回以前丢失的提交
查看安装扩展
Administrator@WIN-SPH9A7GUHPN /e/xampp/php
$ php -m |grep -i mysql（特别查找）
mysql


本地改动不像提交
git add .
git reset --hard   HEAD

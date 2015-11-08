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

　
body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}

h1,
h2,
h4 {
  margin-top: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: normal;
  color: #333;
}

@media (min-width: 1200px) {
  .container {
    width: 970px;
  }
}

.blog-masthead {
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
  box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
}

.blog-nav-item {
  position: relative;
  display: inline-block;
  padding: 10px;
  font-weight: 500;
  color: #cdddeb;
}

.blog-nav .active {
  color: #fff;
}

.blog-nav .active:after {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -5px;
  vertical-align: middle;
  content: " ";
  border-right: 5px solid transparent;
  border-bottom: 5px solid;
  border-left: 5px solid transparent;
}

.blog-header {
  padding-top: 20px;
  padding-bottom: 20px;
}

.blog-title {
  margin-top: 30px;
  margin-bottom: 0;
  font-size: 60px;
  font-weight: normal;
}

.blog-description {
  font-size: 20px;
  color: #999;
}

.blog-main {
  font-size: 18px;
  line-height: 1.5;
}

.sidebar-module {
  padding: 15px;
  margin: 0 -15px 15px;
}

.sidebar-module-inset {
  padding: 15px;
  background-color: #f5f5f5;
  border-radius: 4px;
}

.sidebar-module-inset p:last-child {
  margin-bottom: 0;
}

.pager {
  margin-bottom: 60px;
  text-align: left;
}

.blog-post {
  margin-bottom: 60px;
}

.blog-post-title {
  margin-bottom: 5px;
  font-size: 40px;
}

.blog-post-meta {
  margin-bottom: 20px;
  color: #999;
}

.blog-footer {
  padding: 40px 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: 1px solid #e5e5e5;
}

.blog-footer p:last-child {
  margin-bottom: 0;
}

.blog-nav li {
  position: relative;
  display: inline-block;
  padding: 10px;
  font-weight: 500;
}

.blog-nav li a {
  color: #fff;
}
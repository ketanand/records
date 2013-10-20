<style>
.pull-left {
    float: left;
}
.field-search {
    border: 1px solid #DBDBDB;
    margin-left: -4px;
    padding: 10px;
    vertical-align: top;
    width: 310px;
}
.btn-gopink {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #DBDBDB;
    color: #888888;
    margin-left: -4px;
    padding: 12px 9px 8px;
    vertical-align: top;
    cursor: pointer
}
.transition {
    color: #329C92;
    cursor: pointer;
    text-decoration: none;
    transition-duration: 0s;
    transition-property: background, color;
    transition-timing-function: ease;
}
</style>
<h1 class="brand-name"><span itemprop="name">
                    Welcome to Movies Shop</span></h1>
<form action="/movies/search" method="post" enctype="multipart/form-data" name="search_form" id="search_form">
	<input type="text" data-toggle="dropdown" onfocus="if(this.value=='Search entire store here...') this.value='';" onblur="if(this.value=='') this.value='Search entire store here...';" maxlength="128" value="Search entire store here..." name="q" autocomplete="off" id="search_box" class="field-search pull-left">
	<input type="submit" value="GO " class="btn-gopink transition pull-left" title="GO" id="searchBtn">
</form>


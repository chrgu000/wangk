//判断一个字符是否在数组中
function in_array(arr,val){ 
　　var str=','+arr.join(",")+","; 
　　return str.indexOf(","+val+",")!=-1; 
} 
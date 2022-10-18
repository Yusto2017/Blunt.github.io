def listSkills(val, list=[]):
    list.append(val)
    return list

    list1 = listSkills('NodeJs')
    list2 = listSkills('java',[])
    list3 = listSkills('Reactjs')
    print("%s" % list1)
    print("%s" % list2)
    print("%s" % list3)
